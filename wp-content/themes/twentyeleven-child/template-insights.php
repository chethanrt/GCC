<?php
/**
 * Template Name: Insights
 */

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
            <h1><?php the_field('hero_title'); ?><?php if (get_field('hero_subtitle')) : ?> <span class="in-green"><?php the_field('hero_subtitle'); ?></span><?php endif; ?></h1>
            <?php if (get_field('hero_description')) : ?>
                <p class="in-hero-desc"><?php the_field('hero_description'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Cards Section -->
    <?php
    $ppp = 6;
    $args = array(
        'post_type'      => 'insights',
        'posts_per_page' => $ppp,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>
        <section class="in-models" id="in-models">

            <?php while ($query->have_posts()) : $query->the_post();
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $excerpt = wp_trim_words(get_the_excerpt(), 20, '…');
            ?>
                <div class="in-model-card">
                    <a class="in-card" href="<?php the_permalink(); ?>"
                        <?php if ($thumb) : ?>style="background-image:url('<?php echo esc_url($thumb); ?>');"<?php endif; ?>>
                        <div class="in-card-body">
                            <h5 class="in-card-title"><?php the_title(); ?></h5>
                        </div>
                        <div class="in-card-body2">
                            <div class="in-comment">
                                <?php if ($excerpt) : ?>
                                    <p class="in-card-text"><?php echo esc_html($excerpt); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </section>
    <?php endif; ?>

    <!-- Load More -->
    <?php if ($query->max_num_pages > 1) : ?>
        <section class="in-cta-section">
            <div class="in-load-more">
                <button id="in-load-more"
                    data-page="1"
                    data-max="<?php echo esc_attr($query->max_num_pages); ?>"
                    data-ppp="<?php echo esc_attr($ppp); ?>">
                    Load More
                </button>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
