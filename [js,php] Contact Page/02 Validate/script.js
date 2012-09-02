function validateText(str,len){
	return str.length >= len;
}

$(function(){
	$('#contact-form').submit(function(){
		var target, err = false;

		target = $('#name');
		if( validateText(target.val(),3) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#subject');
		if( validateText(target.val(),5) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#mail');
		if( validateText(target.val(),7) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#txt');
		if( validateText(target.val(),10) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		return !err;

	});
});