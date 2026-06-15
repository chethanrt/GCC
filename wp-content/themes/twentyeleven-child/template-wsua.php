<?php
/**
 * Template Name: WSUA
 */

get_header();
?>

<main>

   <?php
/**
 * Template Name: WSUA
 */

get_header();

$introduction = get_field('introduction');
?>

<main>


<section class="wsua-hero-title">
    <h1>
         <?php echo wp_kses_post($introduction['title']); ?>
    </h1>
</section>

<section class="wsua-hero-container">
    <div class="wsua-container">
        <div class="wsua-flex">

            <div class="col-md-6">
                <div class="wsua-img">

                    <?php if (!empty($introduction['left_image'])) : ?>
                        <img
                            id="ytThumb"
                            src="<?php echo esc_url($introduction['left_image']['url']); ?>"
                            class="wsua-img-fluid"
                            alt="<?php echo esc_attr($introduction['left_image']['alt']); ?>">
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-md-6">
                <div class="wsua-hero-overlay">

                    <h1>
                        <?php echo wp_kses_post($introduction['heading']); ?>
                    </h1>

                    <div class="wsua-hero-line"></div>

                    <p class="wsua-hero-desc">
                        <?php echo esc_html($introduction['description']); ?>
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="wsua-content">
    <div class="wsua-bg">

        <div class="wsua-bg-title">
            <h1><?php the_field('title'); ?></h1>
            <div class="wsua-hero-line"></div>
        </div>

        <div class="wsua-bg-content">

            <?php if (have_rows('row')) : ?>
                <?php while (have_rows('row')) : the_row();

                    $image       = get_sub_field('image');
                    $heading     = get_sub_field('heading');
                    $description = get_sub_field('description');

                ?>

                    <div class="wsua-card">

                        <div class="wsua-left">

                            <?php if ($image) : ?>
                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                        </div>

                        <div class="wsua-vline">
                        </div>

                        <div class="wsua-right">
                            <h1><?php echo esc_html($heading); ?></h1>

                            <p>
                                <?php echo esc_html($description); ?>
                            </p>
                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
</section>
</main>

<?php get_footer(); ?>


</main>

<?php get_footer(); ?>