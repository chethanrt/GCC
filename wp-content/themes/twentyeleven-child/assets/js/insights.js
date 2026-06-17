jQuery(document).ready(function ($) {

    var btn = $('#in-load-more');

    btn.on('click', function () {
        var $btn  = $(this);
        var page  = parseInt($btn.data('page'));
        var max   = parseInt($btn.data('max'));
        var ppp   = parseInt($btn.data('ppp'));
        var next  = page + 1;

        $btn.text('Loading...').prop('disabled', true);

        $.ajax({
            url: insightsAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'insights_load_more',
                nonce:  insightsAjax.nonce,
                page:   next,
                ppp:    ppp,
            },
            success: function (response) {
                if (response.success && response.data.html) {
                    $('#in-models').append(response.data.html);
                    $btn.data('page', next);

                    if (next >= max) {
                        $btn.closest('.in-load-more').hide();
                    } else {
                        $btn.text('Load More').prop('disabled', false);
                    }
                } else {
                    $btn.closest('.in-load-more').hide();
                }
            },
            error: function () {
                $btn.text('Load More').prop('disabled', false);
            }
        });
    });

});
