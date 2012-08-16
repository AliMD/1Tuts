Math.rnd = Math.random;
Math.random = function (a,b){
	return (!a && !b) ? Math.rnd() : Math.floor(Math.rnd()*(b-a+1))+a;
}

$(function(){
	var pics = $('div.gallery a'),
		maxWidth = window.innerWidth,
		maxHeight = window.innerHeight,
		aniDue = 1200,
		aniStep = 300,
		aniDelay = 100;

	pics.each(function(){
		var that = this;
		setTimeout(function (){
			$(that).animate({
				left : Math.random(0,maxWidth - 200 ),
				top : Math.random(0,maxHeight -200 )
			},aniDue,'cubic-bezier(.05,.7,.3,.95)');

		},aniDelay);
		aniDelay += aniStep;
	});

	pics.click(function(){
		$(this).animate({
			left:100,
			top:100
		},1000);

		$('img',this).animate({
			width:500
		},1000);

		return false;
	});
});


