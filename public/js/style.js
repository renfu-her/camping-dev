(function ($) {
	"use strict";

	var spinner = function () {
		setTimeout(function () {
			if ($('#spinner').length > 0) {
				$('#spinner').removeClass('show');
			}
		}, 1);
	};
	spinner(0);

	new WOW().init();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });

	$(".header-carousel").owlCarousel({
		animateOut: 'slideOutDown',
		items: 1,
		autoplay: true,
		smartSpeed: 1000,
		dots: false,
		loop: true,
		nav: true,
		navText: [
			'<i class="bi bi-arrow-left"></i>',
			'<i class="bi bi-arrow-right"></i>'
		],
	});

	$(".testimonial-carousel").owlCarousel({
		autoplay: true,
		items: 1,
		smartSpeed: 1500,
		dots: true,
		loop: true,
		margin: 25,
		nav: true,
		navText: [
			'<i class="bi bi-arrow-left"></i>',
			'<i class="bi bi-arrow-right"></i>'
		]
	});

	$(".testimonial-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1000,
		center: true,
		dots: true,
		loop: true,
		margin: 25,
		nav: true,
		navText: [
			'<i class="bi bi-arrow-left"></i>',
			'<i class="bi bi-arrow-right"></i>'
		],
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1200: {
				items: 1
			}
		}
	});

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('.back-to-top').fadeIn('slow');
		} else {
			$('.back-to-top').fadeOut('slow');
		}
	});
	$('.back-to-top').click(function () {
		$('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
		return false;
	});

})(jQuery);

$(".place-carousel").owlCarousel({
	autoplay: true,
	smartSpeed: 1500,
	center: false,
	dots: true,
	loop: true,
	margin: 25,
	nav: true,
	navText: [
		'<i class="bi bi-arrow-left"></i>',
		'<i class="bi bi-arrow-right"></i>'
	],
	responsiveClass: true,
	responsive: {
		0: {
			items: 1
		},
		576: {
			items: 1
		},
		768: {
			items: 2
		},
		992: {
			items: 3
		},
		1200: {
			items: 4
		}
	}
});

