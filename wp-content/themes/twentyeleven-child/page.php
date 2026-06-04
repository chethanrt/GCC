<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); 

echo '<pre>';
echo 'Error log path: ' . ini_get('error_log') . "\n";
echo 'Log errors: ' . ini_get('log_errors') . "\n";
echo 'Display errors: ' . ini_get('display_errors') . "\n";
echo 'Error reporting: ' . error_reporting() . "\n";
echo '</pre>';

?>

		<div id="primary">
			<div id="content" role="main">

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // End of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
