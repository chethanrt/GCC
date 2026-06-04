<?php
/*
Template Name: Privacy Policy
*/

get_header();
 ?>
 <style>
 .monk-form .container.effort {
    background: #f4f4f4 0% 0% no-repeat padding-box;
    opacity: 1;
    padding: 45px;
     margin-bottom:20px; }
 </style>
  <section class="cont-monk ">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2">
         <h1 class="text-center"><?php the_title(); ?></h1>
         <h3 class="text-center"><?php the_field('tag_line'); ?></h3>
        <div class="cont-mok">
		
          <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vde.png" class="img-fluid" alt="">
          <a href="<?php the_field('book_a_demo_email_id'); ?>"><?php the_field('book_a_demo_email_id'); ?></a>-->
        </div>
         
        </div>
      </div>
    

    </div>
  </section>
  <section class="monk-form">
    <div class="container effort">
	<?php the_content(); ?>
	</div>
	</section>
 
 
 <?php get_footer(); ?>