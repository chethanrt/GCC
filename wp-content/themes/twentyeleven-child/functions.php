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
add_action('send_headers', 'impelsysgcc_set_clickjacking_headers');
function impelsysgcc_set_clickjacking_headers() {
    // For modern browsers: only allow your own domain to frame your site
    header("Content-Security-Policy: frame-ancestors 'self'");
    
    // For older browsers: deny all framing
    header("X-Frame-Options: DENY");
}

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



function my_template_styles() {

    if (is_page_template('template-our-team.php')) {

        echo '<!-- TEMPLATE DETECTED -->';

        wp_enqueue_style(
            'our-team-css',
            get_stylesheet_directory_uri() . '/assets/css/our-team.css',
            [],
            time()
        );
    }
}
add_action('wp_enqueue_scripts', 'my_template_styles');


?>
