// Functionality
$(document).ready(function(){
    // Footer year
    var date = new Date();
    var year = date.getFullYear();
    $('#footerYear').html(year);

    // Owl Carousel initializing
    $("#rotatingArea").owlCarousel({
        autoPlay : true,
        navigation : false,
        slideSpeed : 500,
        paginationSpeed : 600,
        singleItem: true,
        lazyLoad : true,
        transitionStyle : "fadeUp"
    });
});

var scrollTopPosition = {};
// Navigation button functionality.
$('#resNavBtn, #openResNavBtn').click(function (){
    if ($('.content-wrapper').hasClass('nav-opened')) {
        $('.content-wrapper').removeClass('nav-opened');
        $('body').scrollTop(scrollTopPosition);
        $('nav.mobile').removeClass('opened');
    } else {
    	scrollTopPosition = $('body').scrollTop();
        $('nav.mobile').addClass('opened');
    	setTimeout(function(){
    		$('.content-wrapper').addClass('nav-opened');
    	}, 280);
    }

    scrollInit();
    return scrollTopPosition;
});
// Fixed navigation functionality.
var scrollInit = function() {
    var scrollTop = $(this).scrollTop();
    var currentWidth = $('body').width();
    var navPosition = $('.nav-placeholder').offset().top;

    if(currentWidth >= 960) {
        $('.content-wrapper').removeClass('nav-opened');
        $('nav.mobile').removeClass('opened');
    }
    if(scrollTop >= navPosition) {
        $('.main-nav-wrapper').addClass('fixed');
    } else {
        $('.main-nav-wrapper').removeClass('fixed');
    }
}

$(window).scroll(scrollInit);
$(window).resize(scrollInit);
setTimeout(scrollInit, 1000);

// Add selected state to current page
$('.nav-item a').each(function() {
    if ($(this).attr('href') == location.href.split("/").slice(-1)) { 
        $(this).addClass('selected'); 
    }
});