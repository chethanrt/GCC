<?php
/**
 * Template Name: Insights
 */

wp_enqueue_style('insights-css', get_stylesheet_directory_uri() . '/assets/css/insights.css');

get_header();
?>

<main>

    <!-- Hero Section -->
    <section class="in-hero"
        <?php
        $hero_bg = get_field('hero_background_image');
        if ($hero_bg) : ?>
            style="background-image:url('<?php echo esc_url($hero_bg['url']); ?>');"
        <?php endif; ?>
    >
        <div class="in-hero-overlay">
            <h1><?php the_field('hero_title'); ?></h1>
            <?php if (get_field('hero_description')) : ?>
                <p class="in-hero-desc"><?php the_field('hero_description'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Cards Section -->
    <?php if (have_rows('cards')) : ?>
        <section class="in-models">

            <?php while (have_rows('cards')) : the_row();
                $image      = get_sub_field('card_image');
                $title      = get_sub_field('card_title');
                $hover_text = get_sub_field('card_hover_text');
                $link       = get_sub_field('card_link');
            ?>

                <div class="in-model-card">
                    <?php if ($link) : ?>
                        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>" class="in-card"
                            <?php if ($image) : ?>style="background-image:url('<?php echo esc_url($image['url']); ?>');"<?php endif; ?>>
                    <?php else : ?>
                        <div class="in-card"
                            <?php if ($image) : ?>style="background-image:url('<?php echo esc_url($image['url']); ?>');"<?php endif; ?>>
                    <?php endif; ?>

                            <div class="in-card-body">
                                <h5 class="in-card-title"><?php echo esc_html($title); ?></h5>
                            </div>

                            <div class="in-card-body2">
                                <div class="in-comment">
                                    <?php if ($hover_text) : ?>
                                        <p class="in-card-text"><?php echo esc_html($hover_text); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                    <?php if ($link) : ?>
                        </a>
                    <?php else : ?>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>

        </section>
    <?php endif; ?>

    <!-- Load More -->
    <?php if (get_field('load_more_text')) : ?>
        <section class="in-cta-section">
            <div class="in-load-more">
                <a href="javascript:void(0)"><?php the_field('load_more_text'); ?></a>
            </div>
        </section>
    <?php endif; ?>

</main>

<script>
jQuery(document).ready(function ($) {

    function openMenu() {
        $('.nav-links').addClass('open');
        $('#nav-overlay').addClass('open');
        $('#menu-btn').html('<i class="fas fa-times"></i>');
    }

    function closeMenu() {
        $('.nav-links').removeClass('open');
        $('#nav-overlay').removeClass('open');
        $('#menu-btn').html('<i class="fas fa-bars"></i>');
    }

    $('#menu-btn').on('click', function () {
        openMenu();
    });

    $('#close-btn').on('click', function () {
        closeMenu();
    });

    $('#nav-overlay').on('click', function () {
        closeMenu();
    });

});
</script>

<?php get_footer(); ?>
