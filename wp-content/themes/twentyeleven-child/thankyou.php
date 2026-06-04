<?php
/*
Template Name: Thank you
*/

get_header();

 ?>

<style>
.sticky-foot{
display:none;
}
</style>


  <section class="cont-monk ">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2">
         <h1 class="text-center"><?php the_title(); ?></h1>
         <h3 class="text-center"><?php the_field('book_a_demo_tag_line'); ?></h3>
        <div class="cont-mok">
          <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vde.png" class="img-fluid" alt="">
          <a href="<?php the_field('book_a_demo_email_id'); ?>"><?php the_field('book_a_demo_email_id'); ?></a>-->
        </div>
         
        </div>
      </div>
    

    </div>
  </section>
 
 
  <script>
        var timer = setTimeout(function() {
            window.location='<?=site_url('')?>/'
        }, 10000);
    </script>


 <?php get_footer(); ?>
