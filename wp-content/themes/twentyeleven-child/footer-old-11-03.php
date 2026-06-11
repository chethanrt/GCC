<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<footer class="footer-distributed">
<div class="top-foot">
    <div class="footer-left">

     <h4 class="footer-company-about">
        About mon'k
      </h4>
<p>An AI ML enabled eLearning and digital content platform that helps training providers, information providers and publishers to build and manage their white-labelled storefronts.</p>
      <div class="footer-icons">

<a target="_blank" href="https://in.linkedin.com/company/impelsys"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/linkedin.png"  alt="" /></a>
<a target="_blank" href="https://www.facebook.com/Impelsys.inc/"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Facebook.png"  alt="" /></a>
<a target="_blank" href="https://twitter.com/Impelsys"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Twitter.png"  alt="" /></a>
<a target="_blank" href="https://www.instagram.com/impelsys/"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/instagram.png"  alt="" /></a>
<a target="_blank" href="https://www.youtube.com/ImpelsysChannel"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/youtube.png"  alt="" /></a>

</div>

    </div> 

    <div class="footer-center">

      <!--<a href="<?php echo site_url(); ?>/about/" class="text-white">About Us</a>-->
    </div>

    <div class="footer-right">

      <h4 class="footer-company-about">
        mon'k Products
      </h4>

      <div class="footer-links">
      <div class="fir-foot">
	  <a href="<?php echo site_url(); ?>/adaptive-learning/">Adaptive Learning</a>
        <a href="<?php echo site_url(); ?>/ebooks/">eBooks</i></a>
        <a href="<?php echo site_url(); ?>/audio-video-player/">Audio Video Player</a>
        <a href="<?php echo site_url(); ?>/reader-as-a-service/">Reader as a Service</a>
        <a href="<?php echo site_url(); ?>/journals/">Journals</a> 
    
      
        </div>

        <div class="footer-icons">

<a target="_blank" href="https://in.linkedin.com/company/impelsys"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/assets/linkedin.png" alt="" data-pagespeed-url-hash="2669088125" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
<a target="_blank" href="https://www.facebook.com/Impelsys.inc/"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/assets/Facebook.png" alt="" data-pagespeed-url-hash="871871197" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
<a target="_blank" href="https://twitter.com/Impelsys"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/assets/Twitter.png" alt="" data-pagespeed-url-hash="2173488394" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
<a target="_blank" href="https://www.instagram.com/impelsys/"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2024/01/instr.png" alt="" data-pagespeed-url-hash="352331457" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
<a target="_blank" href="https://www.youtube.com/ImpelsysChannel"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/twentyeleven-child/assets/youtube.png" alt="" data-pagespeed-url-hash="3394510414" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>

</div>
    
<?php
            /*$defaults = array(
                            'theme_location'  => '',
                            'menu'            => 'Footer Menu',
                            'container'       => 'false',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                             'after'           => '',       
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        );
             wp_nav_menu($defaults);*/ ?>
        

      </div>

    </div>
  </div>

  <div class="last-foot">
    <h3>Powered by <a href="https://www.impelsys.com/">Impelsys</a></h3>
	    <h3>&copy; <?=date('Y')?> All rights reserved.</h3>
    <a href="<?php echo site_url(); ?>/privacy-policy/"><h3>Privacy Policy</h3></a>
  </div>
 
  </footer>
 <div class="sticky-foot">
<a href="<?php echo site_url(); ?>/book-a-demo/">Book a Demo</a></div>

  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script>
    $(document).ready(function () {
      $('.brand-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      })
    });

    var swiper = new Swiper(".mySwiper", {
      loop: true,                         //loop
      autoplay: {                         //autoplay
        delay: 5000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

   /* $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll > 300) {
        $("nav").css("background", "#0F0F33");
      }

      else {
        $("nav").css("background", "transparent");
      }
    })*/

    $('#testimonk').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navigation: true,
    navText: ["<img src='<?php echo site_url(); ?>/wp-content/uploads/2023/10/left.png'>","<img src='<?php echo site_url(); ?>/wp-content/uploads/2023/10/right.png'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


  
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <script>
        jQuery('.card-deck a').fancybox({
  caption : function( instance, item ) {
    return jQuery(this).parent().find('.card-text').html();
  }
});

// jQuery('#menu-item-1516').on('click',function() {
//   jQuery('#menu-item-1516 ul.sub-menu.drop-menu').toggleClass('open');
// });
    </script>


<?php wp_footer(); ?>
	<script>

 $(document).ready(function(){
	
	 setTimeout(function(){
		$( "#nf-field-1" ).on( "keydown", function(event){
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    }); 
	 },1500);
	 });
	 $(document).ready(function(){
	 // Numeric-only input for phone number with a limit of 10 characters
	 setTimeout(function(){
    $("#nf-field-5").on("keydown", function(event){
        var key = event.keyCode;
        var currentValue = $(this).val();
        var numericInput = (key >= 48 && key <= 57) || key == 8;

        // Limit length to 10 characters
         if (currentValue.length === 10 && key != 8) {
            event.preventDefault();
        }

        return numericInput;
    });
     },1500);
});


</script>
</body>
</html>
