
<?php
/*
Template Name: Reader Service Template 2
*/

get_header();
 ?> 
 <div class="down-arrow"></div>

  <section class="pr-1">
    <div class="triangle-down"></div>
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace34 p-0">
          <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/new-assets/dce.png" class="img-fluid mr-2" alt=""><?php the_field('top_title'); ?></h1>
          <h2><?php the_field('big_title'); ?></h2>
          <h3><?php the_field('tag_line'); ?></h3>
        </div>
      </div>
    </div>
  </section>
  <section class="pr-02">
  <!-- <div class="triangle-downr"></div> -->
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-6 col-sm-12 col-xs-12 wace2 p-0">
		  <?php 
        $bimage = get_field('reader_image');
	
        ?>
          <img src="<?php echo esc_url($bimage['url']); ?>" class="img-fluid" alt="<?php echo esc_url($bimage['alt']); ?>">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 wace1 p-0">
        <h2 class="mob-monk"><?php the_field('reader_content_title-mob'); ?></h2>
          <h2 class="desk-monk"><?php the_field('reader_content_title'); ?></h2>
		   <h3><?php the_field('reader_content_small_title'); ?></h3>
          <p><?php the_field('reader_content_details'); ?></p>
		  <?php if( get_field('reader_content_button_text') ) { ?> <a class="rase" href="<?php the_field('reader_content_button_link'); ?>"><?php the_field('reader_content_button_text'); ?></a><?php } ?>
        </div>
      </div>
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

      <?php $count = count(get_field('eee_content_details')); 

?>
      <div class="row effort-row mt-5  <?php echo ($count==4)?'four-cards':'';?>">

     

		 <?php if( have_rows('eee_content_details') ): 
			while( have_rows('eee_content_details') ): the_row(); 
        
	$moimage = get_sub_field('eee_cd_image');
	$hoimage = get_sub_field('eee_cd_hover_image');



        ?>
		<div class="col-md-4 col-sm-6 col-xs-12 wace26 p-0">
          <div class="card" style="background:url(<?php echo esc_url($moimage['url']); ?>)">
            <!-- <img src="new-assets/fgg.png" class="img-fluid arre" alt=""> -->
            <!-- <img class="card-img-top" src="/new-assets/f1.png" alt="Card image cap"> -->
            <div class="icon-container1 desk-c">
			
			   <a href="<?php the_sub_field('eee_cd_link'); ?>"><img  class="img-fluid arre" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/new-assets/fgg.png"/>
              <img  class="img-fluid arre" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/new-assets/cs.png"/> </a>
            </div>

            <div class="icon-container1 mob-c">
			
      <a href="<?php the_sub_field('eee_cd_link'); ?>"><img  class="img-fluid arre" src="<?=site_url('')?>/wp-content/uploads/2023/10/tap.gif"/>
           <img  class="img-fluid arre" src="<?=site_url('')?>/wp-content/uploads/2023/10/tap.gif"/> </a>
         </div>

           <!-- <div class="icon-container">
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
<div class="row effort-row rase">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2 p-0">
         
          <h2><?php the_field('advantage_title'); ?></h2>
          <a href="<?php the_field('advantage_button_link'); ?>"><?php the_field('advantage_button_text'); ?></a>
        
        </div>

      </div>

    </div>
  </section>
 <?php get_footer(); ?>
