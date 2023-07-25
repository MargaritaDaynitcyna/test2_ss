var slider;

$(document).ready(function() {
  
	slider = $('.content__slider').bxSlider({
		controls: false,
		slideMargin: 6,
		auto: false,
		infiniteLoop: false,
		touchEnabled: false,
		hideControlOnEnd: false,
		adaptiveHeight: true,
		mode:'fade',
	});

	$('.next-btn').on('click', function() {
		slider.goToNextSlide();

		var scrollName = $(this).attr('data-scroll'),
			scrollElem = $(scrollName),
			scrollTop = scrollElem.offset().top;

		$('html, body').animate({
			scrollTop: scrollTop
		}, 500);
	});


	$(function BannerBlink() {
		setInterval(function() {
			$(".banner-text").toggleClass("is-active");
		}, 200);
		
	});

});



$(window).load(function() {

	var counter = 1;

	// $('.bx-prev').on('click', function () {
	// console.log(counter)
	//counter = counter - 1;
	//});

	// $('.next-btn').on('click', function() {
	// 	//var counter = 1;
	// 	counter = counter + 1;
	// 	if (counter > 6) {
	// 		hideP();
	// 		counter = 6;
	// 	}
	// 	console.log(counter);
	// });

	// console.log(counter);

	// function hideP() {
	// 	$('.next-btn').hide()
	// }


});