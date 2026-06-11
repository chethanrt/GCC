<?php
/**
 * Template Name: Our Team
 */

get_header();

$hero_bg = get_field('hero_background_image');
$title = get_field('title');
$cards   = get_field('card');
$cta     = get_field('book_a_conversation');
?>

<main>

    <!-- Hero Section -->
    <section
        class="l-hero"
        <?php if (!empty($hero_bg)) : ?>
            style="background-image: url('<?php echo esc_url($hero_bg['url']); ?>');"
        <?php endif; ?>
        >
        <div class="l-hero-overlay">
                <h1> <?php echo wp_kses_post(get_field('hero_title')); ?>  </h1>
            <div class="l-hero-line"></div>

                <p class="l-hero-desc">
                    <?php echo esc_html(get_field('hero_description')); ?>
                </p>
            

        </div>
    </section>

    <!-- Leadership -->

<?php if ($title) : ?>
<section class="l-intro-section">
    <h2><?php echo esc_html($title); ?></h2>
</section>
<?php endif; ?>

<?php if ($cards) : ?>
<section class="l-models">

    <?php foreach ($cards as $card) : ?>

    <div class="l-model-card">
        <div class="l-card-main">

            <div class="leadership">

                <?php if (!empty($card['profile_link'])) : ?>
                    <a href="<?php echo esc_url($card['profile_link']); ?>" target="_blank">
                <?php endif; ?>

                <?php if (!empty($card['image'])) : ?>
                    <img
                        src="<?php echo esc_url($card['image']['url']); ?>"
                        alt="<?php echo esc_attr($card['title']); ?>"
                        class="l-card-icon">
                <?php endif; ?>

                <?php if (!empty($card['profile_link'])) : ?>
                    </a>
                <?php endif; ?>

                <?php if (!empty($card['linkedin_link'])) : ?>
                <div class="in-icon">
                    <a href="<?php echo esc_url($card['linkedin_link']); ?>" target="_blank">
                     <img
                        class="l-img-fluid"
                        src="<?php echo esc_url( home_url('/wp-content/uploads/2026/06/in-icon.png') ); ?>"
                        alt="LinkedIn"
                    >
                    </a>
                </div>
                <?php endif; ?>

            </div>

            <div class="leadership-content">

                <?php if (!empty($card['title'])) : ?>
                    <h3 class="l-card-title">
                        <?php echo esc_html($card['title']); ?>
                    </h3>
                <?php endif; ?>

                <div class="l-card-line"></div>

                <?php if (!empty($card['subtitle'])) : ?>
                    <p class="l-card-desc">
                        <?php echo esc_html($card['subtitle']); ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($card['hover_text'])) : ?>
                    <div class="l-card-hover-text">
                        <?php echo esc_html($card['hover_text']); ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>

    <?php endforeach; ?>

</section>
<?php endif; ?>


<section class="l-bottom-section">
    <div class="l-cta-section">

        <div class="l-cta-icon">
            <img
                src="<?php echo esc_url(home_url('/wp-content/uploads/2026/06/l-bottom-icon.png')); ?>"
                alt="GCC Care"
            >
        </div>

        <p class="l-cta-desc">
            <?php echo wp_kses_post($cta['heading']); ?>
        </p>

        <?php if (!empty($cta['button']['text'])) : ?>
            <a
                href="<?php echo !empty($cta['button']['link']) ? esc_url($cta['button']['link']) : '#'; ?>"
                class="l-cta-btn"
            >
                <?php echo esc_html($cta['button']['text']); ?>
            </a>
        <?php endif; ?>

    </div>
</section>
</main>

<?php get_footer(); ?>