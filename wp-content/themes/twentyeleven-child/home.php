<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main class="home">

    <!-- ================= HERO / BANNER SECTION ================= -->
      <section class="monk-banner" style="display: block;">

            <div class="banner-slider">
                <!-- <div>
                    <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/Your-AI-First-GCC.jpg" class="desktop-b" alt="Your AI First GCC">
                    <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/Your-AI-First-GCC-mobile-view.png" class="mobile-b" alt="Your AI First GCC">
                </div>
                <div>
                    <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/360-Pact.jpg" class="desktop-b" alt="360 Pact">
                    <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/360-Pact-mobile-view.png" class="mobile-b" alt="360 Pact">
                </div> -->
              <?php while (have_rows('banner_slider_details')) : the_row();

    $desktop_img = get_sub_field('banner_image');
    $mobile_img  = get_sub_field('mobile_image');

?>
    <div class="banner-slide">

        <?php if (!empty($desktop_img)) : ?>
            <img src="<?php echo esc_url($desktop_img['url']); ?>"
                 alt="<?php echo esc_attr($desktop_img['alt']); ?>"
                 class="desktop-b">
        <?php endif; ?>

        <?php if (!empty($mobile_img)) : ?>
            <img src="<?php echo esc_url($mobile_img['url']); ?>"
                 alt="<?php echo esc_attr($mobile_img['alt']); ?>"
                 class="mobile-b">
        <?php endif; ?>

    </div>
<?php endwhile; ?>

             </div>
                
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-12 monk-ban">
                        <div class="bg-video-wrap ">
                            <!-- <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/Your-AI-First-GCC.jpg" class="desktop-b" alt="">
                                        <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/Your-AI-First-GCC-mobile-view.png" class="mobile-b" alt="">
                                        <div class="main-ment">
                                            <h1></h1>
                                            <h2></h2>
                                            <a href="" class="monk-a"></a>
                                        </div>

                                        <div class="main-ment first-sec">
                                            <h2></h2>
                                            <h1></h1>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/360-Pact.jpg" class="desktop-b" alt="">
                                        <img src="https://impelsysgcc.com/wp-content/uploads/2026/06/360-Pact-mobile-view.png" class="mobile-b" alt="">
                                        <div class="main-ment">
                                            <h1></h1>
                                            <h2></h2>
                                            <a href="" class="monk-a">               </a>
                                        </div>


                                        <div class="main-ment first-sec">
                                            <h2></h2>
                                            <h1></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"><img src="https://impelsysgcc.com/wp-content/themes/twentyeleven-child/assets/ryh.png" class="img-fluid"> </div>
                                <div class="swiper-button-prev"><img src="https://impelsysgcc.com/wp-content/themes/twentyeleven-child/assets/lftr.png" class="img-fluid"></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================= HERO CONTENT SECTION ================= -->
   <?php
$hero = get_field('hero_section');

if ($hero) :

    $thumbnail = $hero['hero_video_thumbnail'];
    $video_url = $hero['hero_video_url'];
    $title = $hero['hero_title'];
    $description = $hero['hero_description'];
?>

<section class="home-hero-container">
    <div class="home-container">
        <div class="home-flex">

            <!-- LEFT: VIDEO THUMBNAIL -->
            <div class="col-md-6">
                         <div class="home-img video-thumbnail1" id="videoThumb">
                            <img id="ytThumb" src="https://impelsysgcc.com/wp-content/uploads/2026/03/TechCircle-GCC-Fireside-thumbnail-2-1.jpg" class="home-img-fluid" alt="Video Thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                    </div>
            <!-- RIGHT: CONTENT -->
            <div class="col-md-6">
                <div class="home-hero-overlay">

                    <?php if ($title) : ?>
                        <h1><?php echo esc_html($title); ?></h1>
                    <?php endif; ?>

                    <div class="home-hero-line"></div>

                    <?php if ($description) : ?>
                        <div class="home-hero-desc">
                            <?php echo wp_kses_post($description); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</section>

<?php endif; ?>

    <!-- ================= TESTIMONIAL + CERTIFICATIONS ================= -->
    <section class="home-content">
        <div class="container effort">
            <div class="box-container">

                <!-- TESTIMONIAL -->
               <?php
$testimonial = get_field('testimonial_fields');

if ($testimonial) :

    $heading = $testimonial['testimonial_heading'];
    $content = $testimonial['testimonial_content'];
    $author = $testimonial['author_name'];
    $designation = $testimonial['author_designation'];
?>

<div class="box flex">

    <?php if ($heading) : ?>
        <h1><?php echo wp_kses_post($heading); ?></h1>
    <?php endif; ?>

    <?php if ($content) : ?>
        <p><?php echo wp_kses_post($content); ?></p>
    <?php endif; ?>

    <div class="box-bottom">

        <?php if ($author) : ?>
            <p class="author"><?php echo wp_kses_post($author); ?></p>
        <?php endif; ?>

        <?php if ($designation) : ?>
            <p><?php echo wp_kses_post($designation); ?></p>
        <?php endif; ?>

    </div>

</div>

<?php endif; ?>
                <div class="separator"></div>

            <?php
$cert = get_field('certifications_section');

if ($cert) :

    $heading = $cert['certifications_heading'];
    $logo_rows = $cert['logo'];
?>

<div class="box">

    <?php if ($heading) : ?>
        <h2><?php echo wp_kses_post($heading); ?></h2>
    <?php endif; ?>

    <?php if ($logo_rows) : ?>
        <div class="certifications-grid">

            <?php foreach ($logo_rows as $row) :

                $inner_logos = $row['logos'];
            ?>

                <?php if ($inner_logos) : ?>
                    <?php foreach ($inner_logos as $item) :

                        $image = $item['logo']; // FINAL correct field
                    ?>

                        <?php if (!empty($image)) : ?>
                            <div class="cert-card">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>">
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</div>

<?php endif; ?>
            </div>
        </div>
    </section>


    <!-- ================= P.A.C.T SECTION ================= -->
  <?php
$pact_title = get_field('pact_title');
$pact_cards = get_field('pact_cards');
?>

<section class="pact-content">

    <div class="pact-bg">

        <!-- TITLE -->
        <?php if (!empty($pact_title)) : ?>
            <div class="pact-title">
                <h1><?php echo wp_kses_post($pact_title); ?></h1>
            </div>
        <?php endif; ?>

        <!-- CARDS -->
        <?php if (!empty($pact_cards)) : ?>
            <div class="home-bg-content">

                <?php foreach ($pact_cards as $card) :

                    $icon = $card['icon'] ?? null;
                    $text = $card['text'] ?? '';
                    $description = $card['description'] ?? '';
                ?>

                <div class="home-card">

                    <!-- ICON -->
                    <div class="home-left">
                        <?php if (!empty($icon)) : ?>
                            <img src="<?php echo esc_url($icon['url']); ?>"
                                 alt="<?php echo esc_attr($icon['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="home-vline"></div>

                    <!-- TEXT -->
                    <div class="home-middle">
                        <?php if (!empty($text)) : ?>
                            <p><?php echo esc_html($text); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="home-right">
                        <?php if (!empty($description)) : ?>
                            <p><?php echo esc_html($description); ?></p>
                        <?php endif; ?>
                    </div>

                </div>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>

    </div>

</section>

    <!-- ================= EOS CARDS ================= -->
   <?php
$eos_title = get_field('eos_title');
$eos_description = get_field('eos_description');
$eos_cards = get_field('eos_cards');
?>

<section class="home-eos">

    <!-- TITLE -->
    <div class="home-eos-title">

        <?php if (!empty($eos_title)) : ?>
            <h1><?php echo esc_html($eos_title); ?></h1>
        <?php endif; ?>

        <?php if (!empty($eos_description)) : ?>
            <p><?php echo esc_html($eos_description); ?></p>
        <?php endif; ?>

    </div>

    <!-- CARDS -->
    <?php if (!empty($eos_cards)) : ?>
        <div class="home-models">

            <?php foreach ($eos_cards as $card) :

                $bg = $card['background_image'] ?? null;
                $title = $card['card_title'] ?? '';
                $hover_title = $card['hover_title'] ?? '';
                $hover_content = $card['hover_content'] ?? '';
            ?>

            <div class="home-model-card">

                <div class="home-card-inner"
                     style="background-image:url('<?php echo esc_url($bg['url'] ?? ''); ?>')">

                    <!-- FRONT TITLE -->
                    <div class="home-card-body">
                        <?php if ($title) : ?>
                            <h5 class="home-card-title">
                                <?php echo esc_html($title); ?>
                            </h5>
                        <?php endif; ?>
                    </div>

                    <!-- HOVER CONTENT -->
                    <div class="home-card-body2">
                        <div class="home-comment">

                            <?php if ($hover_title) : ?>
                                <h1><?php echo esc_html($hover_title); ?></h1>
                            <?php endif; ?>

                            <?php if ($hover_content) : ?>
                                <p class="home-card-text">
                                    <?php echo esc_html($hover_content); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</section>


<!-- ================= VIDEO MODAL ================= -->
<div id="videoModal" class="video-modal">
    <div class="video-modal-content">
        <span class="close-btn" onclick="closeVideoPopup()">×</span>
        <iframe id="youtubeVideo" width="100%" height="400"
            src=""
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
        </iframe>
    </div>
</div>

<script>
   jQuery(document).ready(function ($) {

    var $slider = $('.banner-slider');

    // destroy if already initialized (prevents WP reload issues)
    if ($slider.hasClass('slick-initialized')) {
        $slider.slick('destroy');
    }

    $slider.slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        fade: false,
        speed: 600,
        cssEase: 'ease-in-out'
    });

});
  </script>
<?php get_footer(); ?>