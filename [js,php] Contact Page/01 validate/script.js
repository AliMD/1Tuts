function validateText(str,len){
	return str.length >= len;
}

function validateEmail(str){
	if(str.indexOf('@')>0){
		return true;
	}else{
		return false;
	}
}


$(function(){
	$('#contact-form').submit(function(){
		var err = false;

		var name = $('#name');
		if( validateText(name.val(),3) ){
			name.removeClass('err').addClass('ok');
		} else {
			name.removeClass('ok').addClass('err');
			err = true
		}

		var email = $('#mail');
		if( validateEmail(email.val()) ){
			email.removeClass('err').addClass('ok');
		} else {
			email.removeClass('ok').addClass('err');
			err = true
		}

		var subject = $('#subject');
		if( validateText(subject.val(),5) ){
			subject.removeClass('err').addClass('ok');
		} else {
			subject.removeClass('ok').addClass('err');
			err = true
		}

		var subject = $('#subject');
		if( validateText(subject.val(),5) ){
			subject.removeClass('err').addClass('ok');
		} else {
			subject.removeClass('ok').addClass('err');
			err = true
		}

		return !err;
	});
});