$(function(){

	var slides = $('.accslides .train > div');


	slides.stop().animate({
		'width':'50px'
	},700);

	slides.eq(0).stop().animate({
		'width':'450px'
	},700);


	slides.click(function(){
		
		slides.stop().animate({
			'width':'50px'
		},700);

		$(this).stop().animate({
			'width':'450px'
		},700);

	});

});

