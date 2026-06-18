<?php
get_header();

$designation = get_field('designation');
$leader_image = get_field('leader_image');
$linkedin_url = get_field('linkedin_url');
$biography = get_field('biography');
?>
<main>
    <section class="ld-hero">
        <div class="ld-hero-overlay">

            <div class="id-row-flex">

                <div class="id-col-xl-5">

                    <div class="id-leadership-box-details">

                        <div class="id-flex">

                            <?php if($leader_image): ?>
                                <div class="id-me-5">
                                    <img
                                        class="id-img-fluid"
                                        src="<?php echo esc_url($leader_image['url']); ?>"
                                        alt="<?php the_title_attribute(); ?>"
                                    >
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($linkedin_url)): ?>
                                <div class="id-details-in-icon">
                                    <a href="<?php echo esc_url($linkedin_url); ?>"
                                       target="_blank"
                                       rel="noopener noreferrer">
                                        <img
                                            class="id-img-fluid"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linked-in-rounded.png"
                                            alt="LinkedIn">
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="ld-col-xl-7">
                    <div class="ld-leadership-box-content">
                        <h1 class="ld-mb-3">
                            <?php the_title(); ?>
                        </h1>
                            <h4><?php echo esc_html($designation); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if($biography): ?>
        <section class="ld-leadership-detail">
            <?php echo wp_kses_post($biography); ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>