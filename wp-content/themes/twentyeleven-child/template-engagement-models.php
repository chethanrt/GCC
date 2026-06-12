<?php
/**
 * Template Name: Engagement Models
 */

get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="em-hero" <?php
        $hero_bg = get_field('hero_background_image');
        if($hero_bg):
            echo 'style="background-image: url(' . esc_url($hero_bg['url']) . ');"';
        endif;
    ?>>
        <div class="em-hero-overlay">
            <h1><?php the_field('hero_title'); ?> <span class="em-green"><?php the_field('hero_subtitle'); ?></span></h1>
            <div class="em-hero-line"></div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="em-cta-section">
        <a href="<?php the_field('cta_button_link'); ?>" class="em-cta-btn"><?php the_field('cta_button_text'); ?></a>
    </section>

    <!-- Intro Section -->
    <section class="em-intro-section">
        <h2><?php the_field('intro_heading'); ?> <span class="em-green"><?php the_field('intro_heading_highlight'); ?></span> <?php the_field('intro_heading_suffix'); ?></h2>
        <p><?php the_field('intro_description'); ?></p>
    </section>

    <!-- Cards Section -->
    <section class="em-models">
        <?php if( have_rows('model_cards') ): ?>
            <?php while( have_rows('model_cards') ): the_row(); ?>
                <div class="em-model-card">
                    <div class="card-main">
                        <img src="<?php echo content_url('/uploads/2026/03/' . get_sub_field('card_image_filename')); ?>" alt="<?php the_sub_field('card_eyebrow'); ?>" class="em-card-icon">
                        <p class="em-card-eyebrow"><?php the_sub_field('card_eyebrow'); ?></p>
                        <h3 class="em-card-title"><?php the_sub_field('card_title'); ?></h3>
                        <div class="em-card-line"></div>
                        <p class="em-card-desc"><?php the_sub_field('card_description'); ?></p>
                    </div>
                    <div class="em-card-bottom">
                        <p>
                            <span class="em-green">Right for you if:</span> <?php the_sub_field('card_bottom_text'); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
