$(function(){

	$('.post_images a').click(function(){
		
		$('.darkbox').css({
			display : 'block',
			'background-image' : 'url(' + $(this).attr('href') + ')'
		}).animate({
			opacity : 1
		},500).click(function(){
			$(this).animate({
				opacity : 0
			},400,'ease-out',function(){
				$(this).css({display : 'none'});
			})
		})

		return false; // prevent to change url
	});


	console.log('Script ok.');
})