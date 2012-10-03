window.onload=function(){
	$('body').removeClass('preload');
	$('menu.top a').click(function(){
		$('body').addClass('unload');
		var newurl = $(this).attr('href');
		setTimeout(function(){
			window.location.href = newurl;
		},700);
		return false; // prevent to load page.
	});
};