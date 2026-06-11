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
<?php
$vimage = get_field('tma_video_poster');
?>
  <a data-fancybox href="#myVideo">
            <img class="card-img-top img-fluid" width="640" height="100%" src="<?php echo esc_url($vimage['url']); ?>" />
          </a>

       <!-- <video id="video" width="640" height="100%" alt="" class="img-fluid" poster="<?php echo esc_url($vimage['url']); ?>">
          <source src="<?php the_field('tma_video_url'); ?>" type="video/mp4">
          Your browser does not support the video tag.
        </video>-->
     <video width="640" height="320" controls id="myVideo" style="display:none;">
            <source src="<?php the_field('tma_video_url'); ?>" type="video/mp4">
            Your browser doesn't support HTML5 video tag.
          </video>
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

  
    <div class="container effort">
     
       
        <div class="box">
            <h2>Box 1 Header</h2>
            
            <p>This is a paragraph inside the first box. It contains some descriptive content about the first box.</p>
        </div>
        <div class="box">
            <h2>Box 2 Header</h2>
           
            <p>This is a paragraph inside the second box. It contains some descriptive content about the second box.</p>
        </div>
        <div class="box">
            <h2>Box 3 Header</h2>
           
            <p>This is a paragraph inside the third box. It contains some descriptive content about the third box.</p>
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
          <img src="<?php echo esc_url($pimage['url']); ?>" class="img-fluid" width="640" height="100%" alt="<?php echo esc_url($pimage['alt']); ?>">
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
              <a href="<?php the_sub_field('monk_learn_more_link'); ?>"><?php the_sub_field('monk_learn_more_text'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dsc.png" class="img-fluid" alt=""></a>
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
  gap: 32px; /* Space between cards */
  justify-content: center;
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
/* gcc changes */



</style>
<!-- gcc changes -->
  <div class="leadership-container">
    <h2 class="leadership-header">Know Our Leaders</h2>
    <div class="leadership-section">
      <div class="card-items">
        <a href="https://www.impelsys.com/about-us/leadership/sameer-shariff/">
          <div class="item-img-bg">
            <div class="item-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Sameer-Shariff-1.webp" alt="Sameer Shariff">
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
      <div class="card-items">
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
              <h4>Vinod Kumar TVV</h4>
              <p class="item-para">COO</p>
            </div>
          </a>
          <div class="social-link">
            <a href="https://www.linkedin.com/in/vinod-kumar-t-v-517568/" target="_blank"><i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
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
      </div>
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
 <?php 

 get_footer(); ?>


<script type="text/javascript">

  const tickers = [
    { id: 'counter-1', start: 0, end: <?php echo $userCount; ?>, interval: 100 }, // Interval in milliseconds
    { id: 'counter-2', start: 0, end: <?php echo $productCount; ?>, interval: 100 },
    { id: 'counter-3', start: 0, end: <?php echo $institutionCount; ?>, interval: 100 }
  ];

  // Function to update ticker value
  function updateTicker(ticker) {
    const element = document.getElementById(ticker.id);
    const currentValue = parseFloat(element.textContent);
    
    // Check if current value is less than the end value
    if (currentValue < ticker.end) {
      // Increment value
      const newValue = currentValue + 1;
      element.textContent = newValue;
    }
  }

  // Function to handle manual adjustment of ticker
  function manualAdjustment(tickerId, newValue) {
    const element = document.getElementById(tickerId);
    element.textContent = newValue;
  }

  // Initialize tickers
  function initializeTicker(ticker) {
    tickers.forEach(ticker => {
      const element = document.getElementById(ticker.id);
      element.textContent = ticker.start;
      setInterval(() => updateTicker(ticker), ticker.interval);
    });
  }

  function initializeTickers() {
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1 // 10% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const ticker = tickers.find(t => t.id === entry.target.id);
          if (ticker) {
            initializeTicker(ticker);
            observer.unobserve(entry.target); // Stop observing after initialization
          }
        }
      });
    }, options);

    tickers.forEach(ticker => {
      const element = document.getElementById(ticker.id);
      observer.observe(element);
    });
  }

  // Initialize tickers when the page is loaded
  window.addEventListener('load', initializeTickers);

  // document.addEventListener("DOMContentLoaded", () => {
  //   const counter = document.getElementById("counter-1");
  //   let count = parseInt(counter.innerText, 10);
  //   // counter.classList.add('rotating');

  //   const updateCounter = () => {
  //       count += 1; // Increment the count
  //       counter.innerText = count; // Update the displayed value with formatted number
  //   };

  //   setInterval(updateCounter, 10000); // Call updateCounter every 60,000 milliseconds (1 minute)
  // });

  
  // document.addEventListener("DOMContentLoaded", () => {
  //   const counter = document.getElementById("counter-1");
  //   let count = parseInt(counter.innerText, 10);
  //   // counter.classList.add('rotating');
  //   const updateCounter = () => {
  //       count += 1; // Increment the count
  //       // const formattedCount = count.toLocaleString(); // Format the count with commas
  //       const formattedCount = count;
  //       // Create a new span element for the new count
  //       const newSpan = document.createElement("span");
  //       newSpan.innerText = formattedCount;
  //       newSpan.classList.add("hidden");

  //       // Add the new span to the counter
  //       counter.appendChild(newSpan);

  //       // Force a reflow to ensure the transition starts
  //       newSpan.offsetHeight; // This is a no-op that forces reflow

  //       // Add the visible class to the new span
  //       newSpan.classList.remove("hidden");
  //       newSpan.classList.add("visible");

  //       // Remove the old span after the transition completes
  //       setTimeout(() => {
  //           // Remove the old span
  //           const oldSpan = counter.querySelector(".visible:not(:last-child)");
  //           if (oldSpan) {
  //               counter.removeChild(oldSpan);
  //           }
  //       }, 500); // This should match the duration of the transition
  //   };

  //   setInterval(updateCounter, 10000); // Call updateCounter every 60,000 milliseconds (1 minute)
  // });
</script>