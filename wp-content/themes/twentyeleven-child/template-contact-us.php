<?php
/**
 * Template Name: Contact Us
 */

get_header();
?>

<main>

    <!-- Hero Section -->
    <section class="co-hero"
        <?php
        $hero_bg = get_field('hero_background_image');
        if ($hero_bg) : ?>
            style="background-image:url('<?php echo esc_url($hero_bg['url']); ?>');"
        <?php endif; ?>
    >
        <div class="co-hero-overlay">
            <h1><?php the_field('hero_title'); ?><?php if (get_field('hero_subtitle')) : ?> <span class="co-green"><?php the_field('hero_subtitle'); ?></span><?php endif; ?></h1>
            <?php if (get_field('hero_description')) : ?>
                <p class="co-hero-desc"><?php the_field('hero_description'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Contact Information -->
    <?php $contact = get_field('contact_information'); ?>

    <section class="contact-section">
        <div class="container-fluid">
            <div class="flex-row">

                <!-- Email -->
                <div class="col-lg-6">
                    <div class="email-box">
                        <div class="align-items-center">
                            <div class="me-3">
                                <img class="img-fluid" src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/2026/03/email-icon.png" alt="">
                            </div>
                            <div class="w-100">
                                <h4>Email</h4>
                                <a href="mailto:<?php echo esc_attr($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-lg-6">
                    <div class="email-box">
                        <div class="align-items-center">
                            <div class="me-3">
                                <img class="img-fluid" src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/2026/03/phone-icon.png" alt="">
                            </div>
                            <div class="w-100">
                                <h4>Phone</h4>
                                <a href="tel:<?php echo esc_attr($contact['phone']); ?>"><?php echo esc_html($contact['phone']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form">
        <div class="contact-form-container">
            <h2>Fill in the form below and we'll get in touch with you.</h2>
            <?php echo do_shortcode('[wpforms id="2275"]'); ?>
        </div>
    </section>

    <!-- Locations -->
    <?php $locations = get_field('locations_section'); ?>

    <section class="co-intro-section">
        <h2><?php echo esc_html($locations['locations_title']); ?></h2>
    </section>

    <?php if (!empty($locations['location_cards'])) : ?>
        <section class="co-models">

            <?php foreach ($locations['location_cards'] as $card) : ?>

                <div class="co-model-card">
                    <div class="co-card-main">

                        <?php if (!empty($card['card_image'])) : ?>
                            <img class="co-img-fluid"
                                src="<?php echo esc_url($card['card_image']['url']); ?>"
                                alt="<?php echo esc_attr($card['location_name']); ?>">
                        <?php endif; ?>

                        <div class="co-location-content">
                            <h4><?php echo esc_html($card['location_name']); ?></h4>

                            <div class="co-address-text">
                                <div class="co-map-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="w-100">
                                    <p><?php echo esc_html($card['complete_address']); ?></p>
                                </div>
                            </div>

                            <div class="co-case-line"></div>

                            <?php if (!empty($card['phone'])) : ?>
                                <p><span>Phone:</span> <?php echo esc_html($card['phone']); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($card['fax'])) : ?>
                                <p><span>Fax:</span> <?php echo esc_html($card['fax']); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($card['link_url'])) : ?>
                                <a href="<?php echo esc_url($card['link_url']); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo esc_html($card['link_text']); ?>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
