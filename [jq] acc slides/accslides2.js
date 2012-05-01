$(function(){

	var slides = $('.accslides .train > div');

	window.openSlide = function (slideIndex, duration){ // globalize 
		slides.stop().animate({
			'width':'50px'
		},duration);

		slides.eq(slideIndex).stop().animate({
			'width':'450px'
		},duration);
	}

	openSlide(0,500);

	slides.click(function(){
		openSlide( slides.index(this) ,700); // jq.index: ali.md/jq/index
	});

});