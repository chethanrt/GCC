<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <nav>
            <div class="wrapper">
                <div class="logo">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( content_url( '/uploads/2026/03/impelsys-logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    <?php endif; ?>
                </div>

                <?php
                wp_nav_menu( [
                    'theme_location' => 'header-menu',
                    'menu'           => 'Header Menu',
                    'menu_id'        => 'menu-menu-1',
                    'container'      => false,
                    'menu_class'     => 'nav-links',
                    'fallback_cb'    => false,
                    'walker'         => new Header_Nav_Walker(),
                ] );
                ?>

                <label for="close-btn" class="btn close-btn" id="close-btn"><i class="fa fa-times"></i></label>
                <span class="btn menu-btn" id="menu-btn"><i class="fas fa-bars"></i></span>
            </div>
        </nav>
    </header>
