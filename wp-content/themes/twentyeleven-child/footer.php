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
