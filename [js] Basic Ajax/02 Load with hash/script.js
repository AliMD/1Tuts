$(function(){
	var loadpage = function(url){
		url = url.length > 2 ? url.substr(1) : 'index.html';
		$('.main-content').load(url+' .main-content');
	}

	$('div.loading').css({
		opacity:1,
		display:'block'
	});

	var pageUrl = window.location.href;
	sharPos = pageUrl.indexOf('#');
	if(sharPos){
		loadpage(pageUrl.substr(sharPos));
		pageUrl = pageUrl.substr(0,sharPos);
	}

	$('div.menu a').click(function(){
		var url = $(this).attr('href');
		window.location.href = pageUrl + '#' + url;
		//$('.main-content').load(url+' .main-content');
		return false;
	});

	window.onhashchange = function(){
		loadpage(window.location.hash);
	}

	
});

window.onload = function(){
	$('div.loading').animate({
		opacity:0
	},700,null,function(){
		$(this).css({display:'none'});
	});
};
