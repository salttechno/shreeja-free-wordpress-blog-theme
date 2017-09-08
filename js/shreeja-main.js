jQuery(document).ready(function($) {

    "use strict";

    // For Fixed header & Scroll to top
	$(window).on("scroll resize", function() {
		if ($(window).scrollTop() >= 500) {
            $(".scroll-to-top").css("bottom", "15px");
            $(".appear-fixed-on-scroll").css("top", "0px");
			$(".admin-bar .appear-fixed-on-scroll").css("top", "32px");
		}
		if ($(window).scrollTop() < 500) {
            $(".scroll-to-top").css("bottom", "-60px");
			$(".appear-fixed-on-scroll").css("top", "-90px");
		}
	});

    // For Scroll to top
    $(".scroll-to-top").on("click", function() {
		return $("html, body").animate({
			scrollTop: 0
		});
    });

    // Slider for gallery post
    $('.bxslider').bxSlider({
        infiniteLoop: true,
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>',
        mode: 'fade'
    });

    // For Featured Posts
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;

    // Add dropdown arrow to parent menu
    $(".shreeja-main-menu .menu-item-has-children > a").append("<i class='fa fa-chevron-down ml-2 float-right'></i>");

    // For menu on mobile
    $(".shreeja-main-menu .menu-item-has-children a .fa").on("click", function(e){
        e.preventDefault();
        // console.log(this);
        $(this).parent().parent().find(" > .sub-menu").toggleClass("showSubMenu");
    });

});
