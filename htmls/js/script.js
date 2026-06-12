jQuery(document).ready(function ($) {

    function openMenu() {
        $('.nav-links').addClass('open');
        $('#nav-overlay').addClass('open');
        $('#menu-btn').html('<i class="fas fa-times"></i>');
    }

    function closeMenu() {
        $('.nav-links').removeClass('open');
        $('#nav-overlay').removeClass('open');
        $('#menu-btn').html('<i class="fas fa-bars"></i>');
    }

    $('#menu-btn').on('click', function () {
        openMenu();
    });

    $('#close-btn').on('click', function () {
        closeMenu();
    });

    $('#nav-overlay').on('click', function () {
        closeMenu();
    });

    // form validation
    $('.form-wrapper').on('submit', function (e) {
        let isValid = true;

        $('.error-message').text('');
        $('.form-control').removeClass('error');

        // Required fields
        $('.field-required').each(function () {

            if (!$(this).val().trim()) {

                $(this).addClass('error');

                $(this)
                    .siblings('.error-message')
                    .text('This field is required');

                isValid = false;
            }
        });

        // Email validation
        const email = $('#email').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email && !emailRegex.test(email)) {

            $('#email')
                .addClass('error')
                .siblings('.error-message')
                .text('Please enter a valid email address');

            isValid = false;
        }

        // Mobile validation
        const phone = $('#phone').val().trim();
        const phoneRegex = /^[6-9]\d{9}$/;

        if (phone && !phoneRegex.test(phone)) {

            $('#phone')
                .addClass('error')
                .siblings('.error-message')
                .text('Please enter a valid 10-digit mobile number');

            isValid = false;
        }

        // Terms validation
        $('.terms-error').remove();

        if (!$('#terms').is(':checked')) {

            $('.checkbox-group').append(
                '<span class="error-message terms-error">Please accept the Terms & Conditions</span>'
            );

            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
    // form validation


    $('#ytThumb').click(function () {


        $('#ytFrame').attr(
            'src',
            'https://www.youtube.com/embed/EngW7tLk6R8?autoplay=1'
        );

        $('#videoModal').fadeIn();
    });

    $('.video-close, #videoModal').click(function (e) {

        if ($(e.target).is('#videoModal, .video-close')) {

            $('#videoModal').fadeOut(function () {
                $('#ytFrame').attr('src', '');
            });
        }
    });

});