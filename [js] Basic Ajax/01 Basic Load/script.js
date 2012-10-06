$(function(){
	$('div.loading').css({
		opacity:1,
		display:'block'
	});
});

window.onload = function(){
	$('div.loading').animate({
		opacity:0
	},700,null,function(){
		$(this).css({display:'none'});
	});
};
