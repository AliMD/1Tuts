Math.orgrandom=Math.random;
Math.random=function(min,max){
	max!=undefined || (max=min) || (min=0);// use min az max -> random(10) 0-10
	return Math.floor(Math.orgrandom() * (max - min + 1) + min);
}

$(function(){
	$('.btn').tap(function(){
		$(this).css({
			left: Math.random(5,95) + '%',
			top:  Math.random(5,95) + '%'
		});
	});
	setTimeout(function(){
		window.scrollTo(0,1);
	},1)
});