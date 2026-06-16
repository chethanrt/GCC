<?php

// Set secure cookie attributes for PHP session cookies
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1');
ini_set('session.cookie_samesite', 'Strict');


ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

 
function wpdocs_custom_dropdown_class( $classes ) {
	$classes[] = 'drop-menu';

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'wpdocs_custom_dropdown_class' );



function custom_archive_title($title) {
    if (is_post_type_archive('aihub')) {
        return 'TCustom Title for AiHub Archive ';
    }
    return $title;
}
add_filter('get_the_archive_title', 'custom_archive_title');


function redirect_404_to_home() {
    if (is_404()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'redirect_404_to_home');

add_filter('pre_comment_content', 'sanitize_comment_input');
function sanitize_comment_input($comment) {
    // Remove all HTML tags
    return wp_kses($comment, array()); 
}
add_action('user_profile_update_errors', 'validate_strong_password', 10, 3);

function validate_strong_password($errors, $update, $user) {
    if (!empty($_POST['pass1'])) {
        $password = $_POST['pass1'];
        
        if (strlen($password) < 8 ||
            !preg_match('/[A-Z]/', $password) ||
            !preg_match('/[a-z]/', $password) ||
            !preg_match('/[0-9]/', $password) ||
            !preg_match('/[\W]/', $password)) {
            $errors->add('password_error', __('Password must be at least 8 characters and include uppercase, lowercase, number, and special character.'));
        }
    }
}
add_action('after_password_reset', 'logout_all_sessions_after_password_reset');

function logout_all_sessions_after_password_reset($user) {
    if (!is_wp_error($user)) {
        // Remove all sessions for the user
        if (class_exists('WP_Session_Tokens')) {
            $sessions = WP_Session_Tokens::get_instance($user->ID);
            $sessions->destroy_all();
        }
    }
}
function disable_specific_login_errors() {
    return 'Invalid login credentials. Please try again.';
}
add_filter('login_errors', 'disable_specific_login_errors');
add_action('wp_login_failed', function($username) {
    sleep(5); // Add 5 second delay to slow down brute-force attempts
});
// Force session to expire 
// add_filter('auth_cookie_expiration', 'custom_login_session_expiry', 99, 3);
// function custom_login_session_expiry($expiration, $user_id, $remember) {
//   // Apply short expiry ONLY if user is accessing wp-admin
//     if ( defined('WP_ADMIN') && WP_ADMIN ) {
//         return 900; // 15 minutes
//     }

//     return $expiration; // Default expiry for frontend
// }


// Securely configure cookies with SameSite, Secure, and HttpOnly
add_filter('set_cookie_options', function ($options) {
    $options['samesite'] = 'Strict'; 
    $options['secure'] = true;       // Send cookies only over HTTPS
    $options['httponly'] = true;     // Prevent JavaScript access to cookies
    return $options;
});

// Prevent Clickjacking by setting CSP and X-Frame-Options
// Skip on REST API and admin requests to avoid blocking the block editor
add_action('send_headers', 'impelsysgcc_set_clickjacking_headers');
function impelsysgcc_set_clickjacking_headers() {
    if ( defined('REST_REQUEST') && REST_REQUEST ) return;
    if ( is_admin() ) return;
    header("Content-Security-Policy: frame-ancestors 'self'");
    header("X-Frame-Options: SAMEORIGIN");
}

// Use Classic Editor for pages and posts (avoids REST API save issues with ACF)
add_filter( 'use_block_editor_for_post_type', function( $use, $post_type ) {
    if ( in_array( $post_type, array( 'page', 'post' ), true ) ) {
        return false;
    }
    return $use;
}, 10, 2 );

// Prevent password reset flooding from both frontend and backend (admin)
add_filter('retrieve_password_message', function ($message, $key, $user_login, $user_data) {
    $user_id = $user_data->ID;
    $cooldown = 5 * 60; // 5 minutes in seconds
    $last_sent = get_user_meta($user_id, 'last_reset_sent', true);

    if ($last_sent && (time() - $last_sent < $cooldown)) {
        wp_die('A reset link was sent recently. Please wait before sending another.');
    }

    update_user_meta($user_id, 'last_reset_sent', time());
    return $message;
}, 10, 4);

add_action('profile_update', function($user_id, $old_user_data) {
    if (!empty($_POST['pass1']) && $_POST['pass1'] !== $old_user_data->user_pass) {
        if (class_exists('WP_Session_Tokens')) {
            $sessions = WP_Session_Tokens::get_instance($user_id);
            $sessions->destroy_all();
        }
    }
}, 10, 2);

add_filter('wp_session_cookie_secure', '__return_true'); // Ensure secure flag is on

add_action('init', function () {
    if (headers_sent()) return;

    $headers = headers_list();
    $cookies = [];

    foreach ($headers as $header) {
        if (stripos($header, 'Set-Cookie:') === 0) {
            $cookie = trim(substr($header, strlen('Set-Cookie:')));
            if (!str_contains($cookie, 'SameSite')) {
                $cookie .= '; SameSite=Strict; Secure; HttpOnly';
            }
            $cookies[] = $cookie;
        }
    }

    // Remove all Set-Cookie headers first
    header_remove('Set-Cookie');

    // Re-set them with the modified attributes
    foreach ($cookies as $cookie) {
        header("Set-Cookie: $cookie", false);
    }
}, 1);



class Header_Nav_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item = $data_object;
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;

        // Mark the last top-level item as the CTA/contact button
        if ( isset( $args->walker->max_pages ) ) {
            // fallback: rely on CSS or menu item class set in WP admin
        }

        $class_names = implode( ' ', array_filter( array_map( 'esc_attr', $classes ) ) );
        $class_attr  = $class_names ? ' class="' . $class_names . '"' : '';

        $output .= '<li' . $class_attr . '>';

        $atts           = [];
        $atts['href']   = ! empty( $item->url ) ? $item->url : '#';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( '' !== $value ) {
                $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
            }
        }

        $title   = apply_filters( 'the_title', $item->title, $item->ID );
        $output .= '<a' . $attributes . '>' . $title . '</a>';
    }
}



function my_template_styles() {

    // Parent theme stylesheet
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Child theme stylesheet
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [ 'parent-style' ],
        time()
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );

    wp_enqueue_style(
        'header-css',
        get_stylesheet_directory_uri() . '/assets/css/header.css',
        [],
        time()
    );

    wp_enqueue_style(
        'footer-css',
        get_stylesheet_directory_uri() . '/assets/css/footer.css',
        [],
        time()
    );

    if ( is_page_template( 'template-our-team.php' ) ) {
        wp_enqueue_style(
            'our-team-css',
            get_stylesheet_directory_uri() . '/assets/css/our-team.css',
            [],
            time()
        );
    }

    if ( is_page_template( 'template-engagement-models.php' ) ) {
        wp_enqueue_style(
            'engagement-models-css',
            get_stylesheet_directory_uri() . '/assets/css/engagement-models.css',
            [],
            time()
        );
    }

     if ( is_page_template( 'template-wsua.php' ) ) {
        wp_enqueue_style(
            'wsua-css',
            get_stylesheet_directory_uri() . '/assets/css/wsua.css',
            [],
            time()
        );
    }

    if ( is_page_template( 'home.php' ) ) {
        wp_enqueue_style(
            'home-css',
            get_stylesheet_directory_uri() . '/assets/css/home.css',
            [],
            time()
        );
    }

    if ( is_page_template( 'template-insights.php' ) ) {
        wp_enqueue_style(
            'insights-css',
            get_stylesheet_directory_uri() . '/assets/css/insights.css',
            [],
            '1.0'
        );
        wp_enqueue_script(
            'insights-js',
            get_stylesheet_directory_uri() . '/assets/js/insights.js',
            [ 'jquery' ],
            '1.0',
            true
        );
        wp_localize_script( 'insights-js', 'insightsAjax', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'insights_load_more_nonce' ),
        ) );
    }

    if ( is_singular( 'post' ) && has_category( 'insights' ) ) {
        wp_enqueue_style(
            'insights-detail-css',
            get_stylesheet_directory_uri() . '/assets/css/insights-detail.css',
            [],
            '1.0'
        );
    }
}
add_action( 'wp_enqueue_scripts', 'my_template_styles' );



function theme_enqueue_scripts() {

    // jQuery (WordPress version)
    wp_enqueue_script('jquery');

    // Slick CSS
    wp_enqueue_style(
        'slick-css',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'
    );

    // Slick JS
    wp_enqueue_script(
        'slick-js',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        null,
        true
    );

    // Your custom script (IMPORTANT: depends on slick)
    wp_enqueue_script(
        'theme-home',
        get_stylesheet_directory_uri() . '/assets/js/home.js',
        array('jquery', 'slick-js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function insights_load_more_handler() {
    check_ajax_referer( 'insights_load_more_nonce', 'nonce' );

    $page = isset( $_POST['page'] ) ? absint( $_POST['page'] ) : 2;
    $ppp  = isset( $_POST['ppp'] )  ? absint( $_POST['ppp'] )  : 6;

    $query = new WP_Query( array(
        'post_type'      => 'post',
        'category_name'  => 'insights',
        'posts_per_page' => $ppp,
        'paged'          => $page,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ) );

    if ( ! $query->have_posts() ) {
        wp_send_json_error();
    }

    ob_start();
    while ( $query->have_posts() ) : $query->the_post();
        $thumb   = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        $excerpt = wp_trim_words( get_the_excerpt(), 20, '…' );
    ?>
        <div class="in-model-card">
            <a class="in-card" href="<?php the_permalink(); ?>"
                <?php if ( $thumb ) : ?>style="background-image:url('<?php echo esc_url( $thumb ); ?>');"<?php endif; ?>>
                <div class="in-card-body">
                    <h5 class="in-card-title"><?php the_title(); ?></h5>
                </div>
                <div class="in-card-body2">
                    <div class="in-comment">
                        <?php if ( $excerpt ) : ?>
                            <p class="in-card-text"><?php echo esc_html( $excerpt ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile;
    wp_reset_postdata();
    $html = ob_get_clean();

    wp_send_json_success( array( 'html' => $html ) );
}
add_action( 'wp_ajax_insights_load_more', 'insights_load_more_handler' );
add_action( 'wp_ajax_nopriv_insights_load_more', 'insights_load_more_handler' );
