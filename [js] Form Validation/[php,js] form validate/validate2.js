var valiate_return;

function require(inp,len){
	if(!len) len=2;
	var span = document.getElementById(inp.name+'_err');
	if(inp.value.length<len){
		span.className='err';
		valiate_return=false;
	}else{
		span.className='msg';
		
	}
}

function checkNumber(inp,Min,Max){
	var span = document.getElementById(inp.name+'_err');
	var num=Number(inp.value);
	if(!Min && Min !=0) Min=false;
	if(!Max && Max !=0) Max=false;
	if( isNaN(num) || (Min===false?false:num<Min) || (Max===false?false:num>Max) ){
		span.className='err';
		valiate_return=false;
	}else{
		span.className='msg';
		
	}
}

function checkform(form){
	valiate_return = true;
	for(var i=0;i<form.elements.length;i++){
		if(form.elements[i].onblur){
			form.elements[i].onblur();
		}
	}
	return valiate_return;
}