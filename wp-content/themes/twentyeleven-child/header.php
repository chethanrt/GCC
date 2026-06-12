<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0 test test
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	//echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	/* translators: %s: Page number. */
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );
}

// Print the <title> tag based on what is being viewed.



?>
	</title>
<?php
echo '<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WVPPT8CFYZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());
  gtag("config", "G-WVPPT8CFYZ");
</script>';
?>



<link rel="profile" href="https://gmpg.org/xfn/11" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( get_stylesheet_uri() ); ?>?ver=20230808" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
   <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preload" as="image" href="<?=site_url()?>/wp-content/uploads/2023/11/mklog.webp" >
<link rel="preload" as="image" href="<?=site_url()?>/wp-content/uploads/2023/10/dr.webp">
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
<?php




	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
if ( is_singular() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>




</head> 

<?php
global $post;
if(@$post->ID == 6) { ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Monk",
  "url": "<?=site_url('/')?>",
  "logo": "<?=site_url('/wp-content/themes/twentyeleven-child/assets/impelsys-logo-final-1.png')?>",
  "sameAs": [
    "https://www.facebook.com/Impelsys.inc/",
    "https://twitter.com/Impelsys?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
    "https://www.instagram.com/impelsys/",
    "https://www.youtube.com/channel/UCTg6p8Zp_bnCCBLGN_0IztA",
    "https://in.linkedin.com/company/impelsys"
  ]
}
</script>
 
<?php } else {
$get_pageurl = @get_permalink($post->ID);
 ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Homepage",
    "item": "<?=site_url('/')?>"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo get_the_title(); ?>",
    "item": "<?=$get_pageurl?>"  
  }]
}
</script>

<?php }

if( @$post->ID == 112) { ?>
<body class="cont-monl">
<?php } else { ?>
<body <?php body_class(); ?> >
<?php } ?>

<?php wp_body_open(); ?>
	<header>
		<nav>
			<div class="wrapper">
				<div class="logo">
					<a href="<?php echo home_url('/'); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/impelsys-logo-final-1.png" alt="Impelsys">
					</a>
				</div>

				<ul id="menu-menu-1" class="nav-links">
					<li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">What Sets Us Apart</a></li>
					<li class="menu-item"><a href="<?php echo esc_url(home_url('/engagement-models/')); ?>">Engagement Models</a></li>
					<li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">Our Team</a></li>
					<li class="menu-item"><a href="<?php echo esc_url(home_url('/insights/')); ?>">Insights</a></li>
					<li class="menu-item contact-btn"><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
				</ul>

				<label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
				<span class="btn menu-btn" id="menu-btn"><i class="fas fa-bars"></i></span>
			</div>
		</nav>
	</header>
	<div class="nav-overlay" id="nav-overlay"></div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const menuBtn = document.getElementById('menu-btn');
			const navLinks = document.querySelector('.nav-links');
			const overlay = document.getElementById('nav-overlay');
			const closeBtn = document.querySelector('.close-btn');

			if (!menuBtn || !navLinks) {
				return;
			}

			function openMenu() {
				navLinks.classList.add('open');
				if (overlay) {
					overlay.classList.add('open');
				}
				menuBtn.innerHTML = '<i class="fas fa-times"></i>';
			}

			function closeMenu() {
				navLinks.classList.remove('open');
				if (overlay) {
					overlay.classList.remove('open');
				}
				menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
			}

			menuBtn.addEventListener('click', function () {
				navLinks.classList.contains('open') ? closeMenu() : openMenu();
			});

			if (closeBtn) {
				closeBtn.addEventListener('click', closeMenu);
			}

			if (overlay) {
				overlay.addEventListener('click', closeMenu);
			}
		});
	</script>
				<?php //get_search_form(); ?>
			
				
