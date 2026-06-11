<?php
/*
Template Name: Reader Service Template 1
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
    
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-5 col-sm-12 col-xs-12 wace2 p-0">
		  <?php 
        $bimage = get_field('reader_image');
	
        ?>
          <img src="<?php echo esc_url($bimage['url']); ?>" class="img-fluid" alt="<?php echo esc_url($bimage['alt']); ?>">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 wace1 p-0">
        <h2 class="mob-monk"><?php the_field('reader_content_title-mob'); ?></h2>
          <h2 class="desk-monk"><?php the_field('reader_content_title'); ?></h2>
          <p><?php the_field('reader_content_details'); ?></p>
        </div>
      </div>
    </div>
    <div class="triangle-downr"></div>
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
        ?>
		<div class="col-md-4 col-sm-6 col-xs-12 wace26 p-0">
		<div class="card">
            <a href="<?php the_sub_field('eee_cd_link'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/new-assets/cs.png" class="img-fluid arre"  alt=""></a>
           
			<img src="<?php echo esc_url($moimage['url']); ?>" class="card-img-top" alt="<?php echo esc_url($moimage['alt']); ?>">
            <div class="card-body">
              <h5 class="card-title"><?php the_sub_field('eee_cd_title'); ?></h5>
              <p class="card-text"><?php the_sub_field('eee_cd_content'); ?></p>
             
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