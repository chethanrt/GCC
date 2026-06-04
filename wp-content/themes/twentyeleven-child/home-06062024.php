<?php
/*
Template Name: Home
*/

get_header(); 
 ?> 
 <section class="monk-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-12 monk-ban">

          <div class="bg-video-wrap ">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
			   <?php if( have_rows('banner_slider_details') ): 
			while( have_rows('banner_slider_details') ): the_row(); 
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
if($materia) { ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pu.png" class="img-fluid" alt=""> <?php } ?> </a>
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
 
  <!--<section class="monk-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-12 monk-ban">

          <div class="bg-video-wrap ">
            <video loop="loop" muted="muted" autoplay="autoplay">
              <source src="<?php the_field('banner_video_url'); ?>" />
            </video>
          </div>
          <div class="main-ment">
            <h1><?php the_field('banner_big_title'); ?></h1>
            <h2><?php the_field('banner_content'); ?></h2>

            <a href="<?php the_field('banner_button_link'); ?>" class="monk-a"><?php the_field('banner_button_text'); ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pu.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>-->
   <section class="sec-mo">
    <h3><?php the_field('our_client_slider_title'); ?></h3>
    <div class="brand-carousel section-padding owl-carousel">
    <?php if( have_rows('our_client_slider_image') ):
$j=1; 
			while( have_rows('our_client_slider_image') ): the_row(); 
        $image = get_sub_field('client_image');
	if($j!=3){
        ?>
      <div class="single-logo">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="img-fluid" width="260" height="100%">
      </div>
      <?php } $j++;  endwhile; ?>
<?php endif; ?>
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
 
  <section class="testimonials-monk">

    <!--<h4><span>&#x2022;</span> <?php the_field('testimonials_top_title'); ?></h4>-->


    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-6 col-sm-12 col-xs-12 wace2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/fvg.png" class="img-fluid" alt="">
          <h3><?php the_field('testimonials_big_title'); ?></h3>
          <div class="klob">
           <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dfrew.png" alt="">-->
            <h2 class="opmonc"><?php the_field('testimonials_side_content'); ?></h2>

          </div>

        </div>
           <div class="col-md-6 col-sm-12 col-xs-12 wace1">

          <div class="owl-carousel owl-theme" id="testimonk">
		  <?php
$loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => '5' ) );

if ( $loop->have_posts() ) :

    while ( $loop->have_posts() ) : $loop->the_post();
?>

   <div class="item">
              <h5><?php //the_title(); ?></h5>
              <p><?php the_field('testimonials_content'); ?></p>

              <div class="orf">
                <h5><?php the_field('testimonials_person_name'); ?> </h5>
                <h6><?php the_field('testimonials_person_designation'); ?></h6>
              </div>
            </div>

<?php   endwhile;
    wp_reset_query();

endif;
?> 
          </div>
        </div>
      </div>
    </div>
  </section>
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
	 <?php if( have_rows('monk_products_list') ): 
			while( have_rows('monk_products_list') ): the_row(); 
       
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
        
		 <?php if( have_rows('eee_content_details') ): 
			while( have_rows('eee_content_details') ): the_row(); 
        
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


            <!--<div class="icon-container">
			<img class="img-fluid" src="<?php echo esc_url($moimage['url']); ?>"  alt="<?php echo esc_url($moimage['alt']); ?>">
             <img class="img-fluid" src="<?php echo esc_url($hoimage['url']); ?>" alt="<?php echo esc_url($hoimage['alt']); ?>">
            </div>-->
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
   <section class="slr">
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

        <a href="<?php the_field('cl_book_demo_link'); ?>" class="bkjl"><?php the_field('cl_book_demo_text'); ?></a>

        </div>
      </div>
    

    </div>
  </section>
 <?php get_footer(); ?>
