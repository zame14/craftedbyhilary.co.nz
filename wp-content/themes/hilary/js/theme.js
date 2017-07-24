jQuery(function($) {
    var $ = jQuery;
    setHomeBannerHeight();
    $(window).resize(function() {
       // setHomeBannerHeight();
    });
});
function setHomeBannerHeight() {
    var $ = jQuery;
    var screenW = $(document).width();
    //if(screenW > 767) {
    var screenH = $(window).height();
    //$(".home-banner").css('height', screenH + 'px');
    $(".sow-slider-base ul.sow-slider-images li.sow-slider-image").addClass('banner-height');
    //}
}