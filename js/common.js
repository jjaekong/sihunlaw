(function($) {
    $(document).on('mouseenter focusin', '#gnb .wrapper', function() {
        $('#gnb').addClass('opened');
    });
    $(document).on('mouseleave', '#gnb .wrapper', function() {
        $('#gnb').removeClass('opened');
    }); 
})(jQuery);