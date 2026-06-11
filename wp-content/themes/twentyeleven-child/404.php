<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<style>
.cont-mok a {
    background-color: #0F0F33;
    padding: 20px 45px;
    color: #fff;
    font-family: 'Sailec Medium';
    text-decoration: unset;
    display: inline-block;
    width: fit-content;
}
	.cont-mok {
   
    margin: 0 0 20px 0;
}
.cont-mok a:hover {background-color: #FFC905; color:#000000;}
</style>
<section class="cont-monk ">
    <div class="container effort">
      <div class="row effort-row">
        <div class="col-md-12 col-sm-12 col-xs-12 wace2">
         <h1 class="text-center">Sorry, page not found</h1>
         <h3 class="text-center">The page you are searching does not exist or has been moved to some other URL</h3>
        <div class="cont-mok">
         <a href="<?php echo site_url();?>" class="bkjl">Go back and start again </a>
        </div>
         
        </div>
      </div>
    

    </div>
  </section>
  
  
  <?php get_footer(); ?>