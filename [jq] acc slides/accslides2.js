$(function(){

	var slides = $('.accslides .train > div');

	slides.click(function(){
		
		slides.stop().animate({
			'width':'50px'
		},700);

		$(this).stop().animate({
			'width':'450px'
		},700);

	});

});

