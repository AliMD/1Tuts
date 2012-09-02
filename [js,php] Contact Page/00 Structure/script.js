// JavaScript Document
$(function(){
	var closeform = $('div.container div.formdesign .close'),
		formdesign = $('div.container div.formdesign'),
		contact = $('div.container a.contact');
	closeform.click(function(){
		contact.animate({opacity:1},200);
		formdesign.animate({
			top:-390
		},500);
	});
	contact.click(function(){
		$(this).animate({opacity:0},500);
		formdesign.animate({
			top:-10
		},500);
	});
});