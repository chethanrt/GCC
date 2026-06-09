<?php
/**
 * Template Name: Insights
 */

get_header();
?>

<main class="insights-page">

    <!-- Hero Section -->
    <section class="insights-hero">
        <div class="container">
            <h1><?php the_field('hero_title'); ?></h1>

            <?php if(get_field('hero_description')) : ?>
                <p>
                    <?php the_field('hero_description'); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Insights Grid -->
    <section class="insights-grid-section">
        <div class="container">

            <?php if(have_rows('insight_cards')) : ?>

                <div class="insights-grid">

                    <?php while(have_rows('insight_cards')) : the_row();

                        $image = get_sub_field('card_image');
                        $title = get_sub_field('card_title');
                        $link = get_sub_field('card_link');
                    ?>

                        <?php if($link) : ?>
                            <a href="<?php echo esc_url($link); ?>" class="insight-card">
                        <?php else : ?>
                            <div class="insight-card">
                        <?php endif; ?>

                            <div class="insight-image">

                                <?php if($image) : ?>
                                    <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($title); ?>"
                                    >
                                <?php endif; ?>

                                <div class="insight-overlay">
                                    <h3><?php echo esc_html($title); ?></h3>
                                </div>

                            </div>

                        <?php if($link) : ?>
                            </a>
                        <?php else : ?>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

            <?php if(get_field('load_more_text')) : ?>
                <div class="load-more-wrapper">
                    <button class="load-more-btn">
                        <?php the_field('load_more_text'); ?>
                    </button>
                </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>