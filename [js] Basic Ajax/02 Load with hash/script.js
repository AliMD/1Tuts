$(function(){
	$('div.loading').css({
		opacity:1,
		display:'block'
	});

	$('div.menu a').click(function(){
		var url = $(this).attr('href');
		$('.main-content').load(url+' .main-content');
		return false;
	});
});

window.onload = function(){
	$('div.loading').animate({
		opacity:0
	},700,null,function(){
		$(this).css({display:'none'});
	});
};
