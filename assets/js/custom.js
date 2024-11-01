jQuery.noConflict();

jQuery(window).on('load', function() {

    if(Cookies.set('xl_popup') != 'seen'){
        Cookies.set('xl_popup', 'seen', { expires: 1 });

        setTimeout(function() {
            jQuery('.popup-container').fadeIn();
        }, 2000);

        jQuery(".btn-close").click(function(){
            jQuery(".popup-container").fadeOut()
        });

    };

});