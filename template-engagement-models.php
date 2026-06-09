<?php
/**
 * Template Name: Engagement Models
 */

get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero" <?php 
        $hero_bg = get_field('hero_background_image');
        if($hero_bg): 
            echo 'style="background-image: url(' . esc_url($hero_bg['url']) . ');"';
        endif; 
    ?>>
        <div class="hero-overlay">
            <h1><?php the_field('hero_title'); ?> <span class="green"><?php the_field('hero_subtitle'); ?></span></h1>
            <div class="hero-line"></div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <a href="<?php the_field('cta_button_link'); ?>" class="cta-btn"><?php the_field('cta_button_text'); ?></a>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <h2><?php the_field('intro_heading'); ?> <span class="green"><?php the_field('intro_heading_highlight'); ?></span> <?php the_field('intro_heading_suffix'); ?></h2>
        <p><?php the_field('intro_description'); ?></p>
    </section>

    <!-- Cards Section -->
    <section class="models">
        <?php if( have_rows('model_cards') ): ?>
            <?php while( have_rows('model_cards') ): the_row(); ?>
                <div class="model-card">
                    <div class="card-main">
                        <img src="<?php echo content_url('/uploads/2026/03/' . get_sub_field('card_image_filename')); ?>" alt="<?php the_sub_field('card_eyebrow'); ?>" class="card-icon">
                        <p class="card-eyebrow"><?php the_sub_field('card_eyebrow'); ?></p>
                        <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                        <div class="card-line"></div>
                        <p class="card-desc"><?php the_sub_field('card_description'); ?></p>
                    </div>
                    <div class="card-bottom">
                        <p>
                            <span class="green">Right for you if:</span> <?php the_sub_field('card_bottom_text'); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
