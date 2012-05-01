$(function(){

	var slides = $('.accslides .train > div');

	slides.last().css({"padding-right":"200px"}); // when mouse moves fast !

	slides.mouseover(function(){
		
		slides.stop().animate({
			'width':'50px'
		},700);

		$(this).stop().animate({
			'width':'450px'
		},700);

	});

	$('.accslides').mouseout(function(){
		slides.stop().animate({
			'width':'150px'
		},500);
	});

});

