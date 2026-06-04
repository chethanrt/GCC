<style>

.wace2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
</style>


<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header();




?>

<div id="primary" class="aiHub">
    <div id="content" role="main">

        <?php
        while (have_posts()):
            the_post();



            ?>


            <section class="pr-1">
                <div class="triangle-down"></div>
                <div class="container effort">
                    <div class="row effort-row">
                        <div class="col-md-12 col-sm-12 col-xs-12 wace34 p-0">
                            <h1><img src="https://themonkplatform.com/wp-content/themes/twentyeleven-child/new-assets/dce.png"
                                    class="img-fluid mr-2" alt=""><?php the_title();?></h1>
                            <h2><?php echo get_field('ai_hub_h1_header'); ?> </h2>
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </section>


            <section class="pr-02">
                <!-- <div class="triangle-downr"></div> -->
                <div class="container effort">
                    <div class="row effort-row">
                        <div class="col-md-6 col-sm-12 col-xs-12 wace2 p-0">
                           <!--  <img src="https://themonkplatform.com/wp-content/uploads/2023/11/Banners_800x819_ALS-1.jpg"
                                class="img-fluid" alt=""> -->

                                <img src="https://themonkplatform.com/wp-content/themes/twentyeleven-child/new-assets/aihub_new.jpg"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 wace1 p-0">
                            <h2 class="mob-monk"></h2>
                            <h2 class="desk-monk"><?php echo get_field('ai_hub_h2_header'); ?></h2>
                            <h3></h3>
                            <p><?php echo get_field('ai_hub_main_content'); ?>
                            </p>
                        </div>
                    </div>


                    

                </div>


            </section>
            


            <div class="col-md-12 col-sm-12 col-xs-12 wace2 ai-acc">
                    <h2>AI Accelerators </h2>
                    <p style="width:75%;">The AI accelerators empower intellectual property owners and content creators by enhancing speed, efficiency, and cost-effectiveness in content generation, transformation, and retrieval.</p>
            </div>


            <!-- <section class="m-mbg">
                <div class="container effort" style="margin-top:6%">
               
                    <div class="col-md-12 col-sm-12 col-xs-12 wace2">
                    <h2><span class="anim">AI Hub </span> Accelerators </h2>
                    </div>
                
                </div>
            </section> -->



            <section class="m-mbg">
                <div class="container effort">
                    <?php if (have_rows('monk_ai_hub_accelerators')):
                        while (have_rows('monk_ai_hub_accelerators')):
                            the_row();

                            ?>
                            <div class="row effort-row">
                                <div class="col-md-5 col-sm-12 col-xs-12 ">

                                    <h3><?php the_sub_field('ha_header'); ?></h3>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 ">
                                    <p><?php the_sub_field('ha_content'); ?></p>
                                    <!-- <a href="<?php the_sub_field('monk_learn_more_link'); ?>"><?php the_sub_field('monk_learn_more_text'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dsc.png" class="img-fluid" alt=""></a> -->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </section>



        <?php endwhile; // End of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>