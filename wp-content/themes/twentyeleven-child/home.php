<?php
/*
Template Name: Home
*/

get_header();

$counterData = new WP_Query(
  array(
    'posts_per_page' => 1,
    'post_type' => 'counter'
  )
);
if ($counterData->have_posts()) {
  while ($counterData->have_posts()) {
    $counterData->the_post();
    // Assuming you have custom fields 'field_name_1' and 'field_name_2'
    $userCount = get_post_meta(get_the_ID(), 'number_of_users', true);
    $productCount = get_post_meta(get_the_ID(), 'number_of_products', true);
    $institutionCount = get_post_meta(get_the_ID(), 'number_of__institutions', true);
  }
  // Reset post data
  wp_reset_postdata();
}
?> 
 <section class="monk-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-12 monk-ban">

          <div class="bg-video-wrap ">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
         <?php if (have_rows('banner_slider_details')):
           while (have_rows('banner_slider_details')):
             the_row();
             $bimage = get_sub_field('banner_image');
             $moimage = get_sub_field('mobile_image');
             ?>
            <div class="swiper-slide <?php the_sub_field('banner_class'); ?>">
            <!--<video loop="loop" muted="muted" autoplay="autoplay">
              <source src="<?php the_field('banner_video_url'); ?>" />
            </video>-->
           <img src="<?php echo esc_url($bimage['url']); ?>" class="img-fluid desktop-b" alt="<?php echo esc_url($bimage['alt']); ?>">
           <img src="<?php echo esc_url($moimage['url']); ?>" class="img-fluid mobile-b" alt="<?php echo esc_url($moimage['alt']); ?>">
                      <div class="main-ment">
                        <h1><?php the_sub_field('banner_big_title'); ?></h1>
                        <h2><?php the_sub_field('banner_content'); ?></h2>

                        <a href="<?php the_sub_field('banner_button_link'); ?>" class="monk-a"><?php the_sub_field('banner_button_text'); ?>
              <?php $materia = get_sub_field('banner_button_link');
              if ($materia) { ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pu.png" class="img-fluid" alt=""> <?php } ?> </a>
                      </div>


                      <div class="main-ment first-sec">
                      <h2><?php the_sub_field('banner_content'); ?></h2>
                        <h1><?php the_sub_field('banner_big_title'); ?></h1>
                      </div>
                    </div>
         
       <?php endwhile; ?>
<?php endif; ?>    
        </div>
              <div class="swiper-button-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ryh.png" class="img-fluid "> </div>
              <div class="swiper-button-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lftr.png" class="img-fluid"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
 
  
<section class="monk-sec2">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-6 col-sm-12 col-xs-12 wace2">
       
         <!-- <h4><?php the_field('tma_top_title'); ?></h4>-->
          <h2><?php the_field('tma_big_title'); ?></h2>
          <p><?php the_field('tma_content'); ?></p>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 wace1">
        <section class="bg_video">
    <div class="container dfe">
      <div class="row">
   <div class="video-thumbnail1" id="videoThumb" style="display: block; margin: 0 auto;">
  <img 
    id="ytThumb"
    src="https://impelsysgcc.com/wp-content/uploads/2026/03/TechCircle-GCC-Fireside-thumbnail-2-1.jpg"
    class="img-fluid" 
    alt="Video Thumbnail"
  >
  <div class="play-button">&#9654;</div>
</div>
      </div>
    </div>
  </section>
        </div>
      </div>
    </div>
    <div class="triangle-downr"></div>
  </section>
 


  <!-- GCC code  -->

  <section class="testimonials-monk">

  <!-- gcc changes -->
    <div class="container effort">
    <!-- gcc changes -->
       <h3 class="box-title">Our Models of Engagement</h3>
       <div class="box-container">
        <div class="box">
            <h2>Build. Operate. Transfer (BOT)</h2>
            <p>Our BOT model builds, operates, and optimizes your GCC before transferring full ownership. We ensure smooth operations and alignment with strategic goals, allowing seamless transition and complete autonomy once established.</p>
        </div>
        <div class="separator"></div>
        <div class="box">
            <h2>Managed GCCs</h2>
            <p>We manage your GCC’s infrastructure, operations, and advanced technology needs, allowing you to focus on core objectives. Our support ensures your center remains agile, scalable, and aligned with long-term business goals.</p>
        </div>
        <div class="separator"></div>
        <div class="box">
            <h2>Centers of Excellence (COEs)</h2>
            <p>Our COEs focus on cloud, data, cybersecurity, AI, and QA, driving innovation and efficiency. These hubs deliver expert talent and technology, ensuring continuous improvement and enhanced operations across key business areas.</p>
        </div>     
       </div>   
          
        
    
    </div>
  </section>
  <!-- GCC code  ENDS-->

  <section class="m-mo">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-7 col-sm-12 col-xs-12 wace2">
          <h2><?php the_field('monk_product_top_title'); ?></h2>
          <h4><?php the_field('monk_product_big_title'); ?></h4>
          <p><?php the_field('monk_product_content'); ?></p>
        </div>
    <?php
    $pimage = get_field('monk_content_image');

            
           
    ?>
        <div class="col-md-5 col-sm-12 col-xs-12 wace1">
       <img src="https://impelsysgcc.com/wp-content/uploads/2024/09/ym.png" class="img-fluid" width="640" height="100%" alt="ym">
        </div>
      </div>
    </div>
  </section>



  
  <section class="m-mbg">
    <div class="container effort">
   <?php if (have_rows('monk_products_list')):
     while (have_rows('monk_products_list')):
       the_row();

       ?>
          <div class="row effort-row">
            <div class="col-md-5 col-sm-12 col-xs-12 ">

              <h3><?php the_sub_field('monk_product_title'); ?></h3>

            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 ">
              <p><?php the_sub_field('monk_product_content'); ?></p>
              <!-- <a href="<?php the_sub_field('monk_learn_more_link'); ?>"><?php the_sub_field('monk_learn_more_text'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dsc.png" class="img-fluid" alt=""></a> -->
            </div>
          </div>
          <?php endwhile; ?> 
<?php endif; ?>
</div>

  </section>
  <section class="pr-03">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2 p-0">
         
          <h2><?php the_field('eee_top_title'); ?></h2>
          <h3><?php the_field('eee_small_title'); ?></h3>
          <p><?php the_field('eee_top_content'); ?></p>
        </div>

      </div>
      <div class="row effort-row mt-5">
        
     <?php if (have_rows('eee_content_details')):
       while (have_rows('eee_content_details')):
         the_row();

         $moimage = get_sub_field('eee_cd_image');
         $hoimage = get_sub_field('eee_cd_hover_image');
         ?>
        <div class="col-md-4 col-sm-6 col-xs-12 wace26 p-0"> 
              <div class="card" style="background:url(<?php echo esc_url($moimage['url']); ?>)">
          <!--  <img class="img-fluid" src="<?php echo esc_url($moimage['url']); ?>"  alt="<?php echo esc_url($moimage['alt']); ?>">
           <img src="new-assets/fgg.png" class="img-fluid arre" alt=""> -->
                <!-- <img class="card-img-top" src="/new-assets/f1.png" alt="Card image cap"> -->
                <div class="icon-container1 desk-c">
      
             <a href="<?php the_sub_field('eee_cd_link'); ?>"><img  class="img-fluid arre" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/new-assets/fgg.png"/>
                  <img  class="img-fluid arre" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/new-assets/cs.png"/> </a>
                </div>

                <div class="icon-container1 mob-c">
      
          <a href="<?php the_sub_field('eee_cd_link'); ?>"><img  class="img-fluid arre" src="https://themonkplatform.com/wp-content/uploads/2023/10/tap.gif"/>
               <img  class="img-fluid arre" src="https://themonkplatform.com/wp-content/uploads/2023/10/tap.gif"/> </a>
             </div>
                
                <div class="card-body">
                  <h5 class="card-title replies animate__animated animate__fadeInUp animate__faster"><?php the_sub_field('eee_cd_title'); ?></h5>
                </div>
                <div class="card-body2">
                  <div class="comment ">
                    <h5 class="card-title animate__animated animate__fadeInUp animate__faster"><?php the_sub_field('eee_cd_hover_title'); ?></h5>
                    <p class="card-text animate__animated animate__fadeInUp animate__faster"><?php the_sub_field('eee_cd_content'); ?></p>
                  </div>
                </div>
              </div>
            </div>
    
       <?php endwhile; ?>
  <?php endif; ?>    
</div>
<!--<div class="row effort-row rase">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2 p-0">
         
          <h2><?php the_field('advantage_title'); ?></h2>
          <a href="<?php the_field('advantage_button_link'); ?>"><?php the_field('advantage_button_text'); ?></a>
        
        </div>

      </div>-->

    </div>

  </section>


   <!-- <section class="slr">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-6 col-sm-12 col-xs-12 wace2">
          <h4><?php the_field('monk_knowledge_top_title'); ?></h4>
          <h2 class="opmon"><?php the_field('monk_knowledge_big_title'); ?></h2>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 wace1">
          <p><?php the_field('monk_knowledge_content'); ?></p>
        </div>
      </div>
<div class="slr-img">
<?php
$kimage = get_field('monk_knowledge_image');
?>
  <img width="640" height="100%" src="<?php echo esc_url($kimage['url']); ?>" alt="<?php echo esc_url($kimage['alt']); ?>" class="img-fluid slr-iu">
</div>
     
    </div>
  </section>
 -->

<section>

<style>
  /* Outer container styles */
/* gcc changes */
.leadership-container {
  text-align: center;
  margin: 20px auto; /* Margin on all sides of the outer container */
  margin-bottom: 40px; /* Extra bottom margin */
}
/* gcc changes */

/* Inner section to create three columns */
/* gcc changes */
.leadership-section {
  display: grid;
 /* grid-template-columns: repeat(3, 1fr);  Ensures 3 cards per row */
 grid-template-columns: repeat(auto-fit, 300px); /* or your card width */
  gap: 32px; 
  justify-content: center;
/* avantika */

    
}
/* gcc changes */

/* Individual card styles */
.leadership-card {
  position: relative;
  overflow: hidden;
  width: auto; /* Auto width based on content */
  height: auto; /* Auto height based on content */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s;
  background-color: #f8f8f8; /* Optional: Background color for a clean look */
}

/* Card hover effect */
.leadership-card:hover {
  transform: scale(1.05);
}

/* Full-tile image styling */
/* gcc changes */
.leadership-card img {
  width: 100%; /* Set image width to 50% of the card */
  height: auto; /* Maintain aspect ratio */
  display: block;
  margin: 0 auto; /* Center the image horizontally */
  filter: grayscale(1); 
}
/* gcc changes */

/* Overlay for name and designation */
.info-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  transition: transform 0.3s;
  transform: translateY(100%); /* Start hidden at the bottom */
}

/* Scroll up effect on hover */
.leadership-card:hover .info-overlay {
  transform: translateY(0); /* Scroll up into view on hover */
}

/* Name styling */
.leadership-card h3 {
  margin: 0;
  font-size: 16px; /* Slightly smaller font size */
}

/* Designation styling */
.leadership-card p {
  margin: 5px 0 0;
  font-size: 12px; /* Slightly smaller font size */
}

/* LinkedIn icon positioning */
.linkedin-icon {
  position: absolute;
  bottom: 10px;
  right: 10px;
}

/* LinkedIn icon size */
.linkedin-icon img {
  width: 20px;
  height: 20px;
}

/* gcc changes */
.pr-03 {
    background-color: #005900;
}
h2.leadership-header {
  margin: 40px auto;
  font-size: 48px;
  line-height: 64px;
  letter-spacing: -.5px;
}

.slrdd {
  background-color: #005900 !important;
}
.slrdd h3 {
  color: #fff;
}
section.monk-sec2 {
  background-image: url(../wp-content/themes/twentyeleven-child/assets/row_sep.png) !important;
}

section.slrdd .container.effort a {
  background-color: transparent !important;
  padding: 0px 0px !important;
}
.video-thumbnail {
  position: relative;
  cursor: pointer;
}

.video-thumbnail img {
  width: 100%;
  height: auto;
  
  border-radius: 10px;
}

.video-thumbnail1 {
  position: relative;
  cursor: pointer;
}

.video-thumbnail1 img {
  cursor: pointer;
}

.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 50px;
  color: white;
  background: rgba(0,0,0,0.6);
  padding: 15px 20px;
  border-radius: 50%;
}

/* Modal */
.video-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.8);
}

.video-modal-content {
  position: relative;
  margin: 10% auto;
  width: 80%;
  max-width: 800px;
}

.close-btn {
  position: absolute;
  top: -30px;
  right: 0;
  font-size: 30px;
  color: white;
  cursor: pointer;
}
.video-modal {
  display: none;
  position: fixed;
  z-index: 999999; /* increase this */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.8);
}
@media (min-width: 1200px) {
.bg_video .container .video-thumbnail1 img {
        height: auto;
}
}
@media (max-width: 768px) {
  .leadership-section {
    grid-template-columns: 1fr;
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .leadership-section {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 1025px) {
  .leadership-section {
    /* grid-template-columns: repeat(3, 1fr); */
    grid-template-columns: repeat(auto-fit, 300px); /* or your card width  avantika */
  }
}


</style>
<!-- gcc changes -->
  <div class="leadership-container">
    <h2 class="leadership-header">Know Our Leaders</h2>
    <div class="leadership-section">
      <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/sameer-shariff/">
          <div class="item-img-bg">
            <div class="item-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Sameer-411x276.png" alt="Sameer Shariff">
            
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/sameer-shariff/">
            <div class="data">
              <h4>Sameer Shariff</h4>
              <p class="item-para">Founder &amp; CEO</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/sameershariff/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/vinod-kumar-tv/">
          <div class="item-img-bg">
            <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vinod-kumar.png" alt="Vinod Kumar TVV">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/vinod-kumar-tv/">
            <div class="data">
              <h4>Vinod Kumar T V</h4>
              <p class="item-para">COO</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/vinod-kumar-t-v-517568/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div> -->
      <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/anand-ramachandran/">
          <div class="item-img-bg">
            <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/anand-ramachandran.webp"
                alt="Anand Ramachandran">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/anand-ramachandran/">
            <div class="data">
              <h4>Anand Ramachandran</h4>
              <p class="item-para">CRO</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/andrcdn/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
       <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/m-k-lakshmi/">
          <div class="item-img-bg">
             <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/M K Lakshmi.png"
                alt="M K Lakshmi">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/m-k-lakshmi/">
            <div class="data">
              <h4>M K Lakshmi</h4>
              <p class="item-para">Head- GCC Initiatives</p>
            </div>
          </a>
       
        </div>
      </div>
      <!-- <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/sripad-k-b/">
          <div class="item-img-bg">
            <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/sripad-k-b.png" alt="Sripad K B">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/sripad-k-b/">
            <div class="data">
              <h4>Sripad K B</h4>
              <p class="item-para">Senior VP- Cloud, Data &amp; AI</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/sripadkb/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div> -->
      <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/srividya-anand-gokhle/">
          <div class="item-img-bg">
            <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/srividya.png" alt="Srividya Anand Gokhle">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/srividya-anand-gokhle/">
            <div class="data">
              <h4>Srividya Anand Gokhle</h4>
              <p class="item-para">VP- Technology</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/srividya-gokhle-76935623/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/kavitha-nandagopal/">
          <div class="item-img-bg">
            <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Kavitha-Nandagopal.png" alt="Kavitha Nandagopal">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/kavitha-nandagopal/">
            <div class="data">
              <h4>Kavitha Nandagopal</h4>
              <p class="item-para">VP- Human Resources</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/kaviv/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/vishwanath-bannur/">
          <div class="item-img-bg">
            <div class="item-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Vishwanath-Bannur.webp" alt="Vishwanath Bannur">
            </div>
          </div>
        </a>
        <div class="item-data">
          <a href="https://www.impelsys.com/about-us/leadership/vishwanath-bannur/">
            <div class="data">
              <h4>Vishwanath Bannur</h4>
              <p class="item-para">CISO and Head of Infrastructure</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/vishwanath-bannur/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <!-- gcc changes -->
</section>





   <section class="slrdd">
    <div class="container effort bluebox">
      <div class="row effort-row">
        <div class="col-md-6 col-sm-12 col-xs-12 wace2">
    <?php
    $climage = get_field('cl_image');
    ?>

         <img width="640" height="100%" src="<?php echo esc_url($climage['url']); ?>" class="img-fluid" alt="<?php echo esc_url($climage['alt']); ?>">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 wace1">
          <h3><?php the_field('cl_big_title'); ?></h3>
          <p><?php the_field('cl_sub_title'); ?></p>

        <!-- <a href="<?php the_field('cl_book_demo_link'); ?>" class="bkjl"><?php the_field('cl_book_demo_text'); ?></a> -->

        </div>
      </div>
    

    </div>
  </section>
  <!-- VIDEO POPUP MODAL -->
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
 <?php 

 get_footer(); ?>


<script type="text/javascript">

  // ── Counter tickers ──────────────────────────────────────────────
  const tickers = [
    { id: 'counter-1', start: 0, end: <?php echo intval($userCount); ?>, interval: 100 },
    { id: 'counter-2', start: 0, end: <?php echo intval($productCount); ?>, interval: 100 },
    { id: 'counter-3', start: 0, end: <?php echo intval($institutionCount); ?>, interval: 100 }
  ];

  function updateTicker(ticker) {
    const element = document.getElementById(ticker.id);
    if (!element) return;
    const currentValue = parseFloat(element.textContent);
    if (currentValue < ticker.end) {
      element.textContent = currentValue + 1;
    }
  }

  function initializeTicker(ticker) {
    const element = document.getElementById(ticker.id);
    if (!element) return;
    element.textContent = ticker.start;
    setInterval(function () { updateTicker(ticker); }, ticker.interval);
  }

  function initializeTickers() {
    const options = { root: null, rootMargin: '0px', threshold: 0.1 };
    const observer = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const ticker = tickers.find(function (t) { return t.id === entry.target.id; });
          if (ticker) {
            initializeTicker(ticker);
            obs.unobserve(entry.target);
          }
        }
      });
    }, options);
    tickers.forEach(function (ticker) {
      const el = document.getElementById(ticker.id);
      if (el) observer.observe(el);
    });
  }

  window.addEventListener('load', initializeTickers);

  // ── Video popup (single, clean handler) ─────────────────────────
  window.openVideoPopup = function () {
    document.getElementById("videoModal").style.display = "block";
    document.getElementById("youtubeVideo").src =
      "https://www.youtube.com/embed/2oCvmf3cUR0?autoplay=1";
  };

  window.closeVideoPopup = function () {
    document.getElementById("videoModal").style.display = "none";
    document.getElementById("youtubeVideo").src = "";
  };

  document.addEventListener("DOMContentLoaded", function () {
    var thumb = document.getElementById("videoThumb");
    var modal = document.getElementById("videoModal");
    var iframe = document.getElementById("youtubeVideo");

    if (thumb) {
      thumb.addEventListener("click", function () {
        modal.style.display = "block";
        iframe.src = "https://www.youtube.com/embed/2oCvmf3cUR0?autoplay=1";
      });
    }

    if (modal) {
      modal.addEventListener("click", function (e) {
        if (e.target === modal) {
          modal.style.display = "none";
          iframe.src = "";
        }
      });
    }
  });

</script>