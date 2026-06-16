<?php
/**
 * Single Insights Post Template
 */

get_header();

$content_field = get_field('section_content');
$images        = get_field('images');

// Split content at <!--more--> so images inject between intro and body
$parts = $content_field ? explode('<!--more-->', $content_field, 2) : ['', ''];
$intro = $parts[0];
$body  = isset($parts[1]) ? $parts[1] : '';
?>

<main>

    <!-- Hero Section -->
    <section class="id-hero"
        <?php
        $hero_bg = get_field('hero_background_image');
        if ($hero_bg) : ?>
            style="background-image:url('<?php echo esc_url($hero_bg['url']); ?>');"
        <?php endif; ?>
    >
        <div class="id-hero-overlay">
            <h1><span class="id-green"><?php the_field('hero_title'); ?></span></h1>
            <?php if (get_the_excerpt()) : ?>
                <p class="id-hero-desc"><?php echo esc_html(get_the_excerpt()); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="id-content-section">

        <?php if ($intro) : ?>
            <div class="id-para">
                <?php echo wp_kses_post($intro); ?>
            </div>
        <?php endif; ?>

        <?php if ($images) : ?>
            <div class="id-img">
                <?php foreach ($images as $image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($body) : ?>
            <div class="id-para">
                <?php echo wp_kses_post($body); ?>
            </div>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
