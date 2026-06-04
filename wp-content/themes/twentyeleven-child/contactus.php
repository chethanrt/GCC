<?php
/*
Template Name: Contact Us
*/

get_header();
 ?>

  <section class="cont-monk ">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2">
         <h1 class="text-center"><?php the_title(); ?></h1>
         <h3 class="text-center"><?php the_field('book_a_demo_tag_line'); ?></h3>
        <div class="cont-mok">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vde.png" class="img-fluid" alt="">
          <a href="mailto:<?php the_field('book_a_demo_email_id'); ?>"><?php the_field('book_a_demo_email_id'); ?></a>
        </div>
         
        </div>
      </div>
    

    </div>
  </section>
   <section class="monk-form">
    <div class="container effort">
    <form>
      <h5><?php the_field('book_a_demo_form_title'); ?></h5>
      <div class="row">
	  <?php echo do_shortcode('[ninja_form id=1]'); ?>
		  <?php //echo do_shortcode('[contact-form-7 id="85a50c4" title="Contact form 1"]'); ?>
	    </div>
    </form>
    </div>
  </section>
 
  <section class="pr-06">
    <div class="container ">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace256 p-0">

          <h2 class="text-center"><?php the_field('op_title'); ?></h2>

          <p class="text-center"><?php the_field('op_content'); ?></p>



        </div>

      </div>


      <div class="row effort-row2">
	  
	    <?php if( have_rows('op_details') ): 
			while( have_rows('op_details') ): the_row(); 
        $bimage = get_sub_field('city_image');
	$moimage = get_sub_field('mobile_image');
        ?>
        <div class="col-md-6 col-lg-6 col-xs-12 gtyb">
          <img src="<?php echo esc_url($bimage['url']); ?>" class="img-fluid" alt="<?php echo esc_url($bimage['alt']); ?>">

            <div class="luy">
              <div class="lbko">
                <div class="icon-imp">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/12/vuesax-linear-location.png" class="img-fluid" alt="">
                </div>
                <div class="textimp">
                  <h3><?php the_sub_field('city_name'); ?></h3>
                  <p><?php the_sub_field('city_address'); ?></p>
                  <a target="_blank" href="<?php the_sub_field('map_link'); ?>">Locate on maps</a>
                </div>
              </div>
            
              <div class="lbko2">
                <div class="icon-imp">
				  <?php if( get_sub_field('phone_number') ): ?>
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/12/Vector.png" class="img-fluid" alt="">
				  <?php endif; ?>
                </div>
                <div class="textimp2">
               <a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a>
                </div>
				  
              </div>
				<div class="lbko2">
                <div class="icon-imp">
				  <?php if( get_sub_field('fax') ): ?>
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/01/Fax-1.png" class="img-fluid" alt="">
				  <?php endif; ?>
                </div>
				<?php if( get_sub_field('fax') ): ?>
				  <div class="textimp2">
               <a href="fax:<?php the_sub_field('fax'); ?>"><?php the_sub_field('fax'); ?></a>
                </div>
				  <?php endif; ?>
            </div>
 </div>


        </div>

        <?php endwhile; ?>
<?php endif; ?>	 


      </div>


    </div>
  </section>

 
 <?php get_footer(); ?>