var inpDefVal = new Array();
var inpPass = new Array();

function inpFocus(){
	if(this.value==inpDefVal[this.name]) {
		this.value='';	
		this.className='active';
		if(inpPass[this.name]) this.type='password';
	}
}

function inpBlur(){
	if(this.value=='') {
		this.value=inpDefVal[this.name];	
		this.className='default';
		if(inpPass[this.name]) this.type='text';
	}
}

window.onload=function() {
	var inputs = document.getElementsByTagName('input');
	for(var i=0; i<inputs.length; i++) {
		if ((inputs[i].type!='text' && inputs[i].type!='password') || inputs[i].value=='') continue;
		inpDefVal[inputs[i].name]= inputs[i].value;
		if(inputs[i].type=='password'){
			inputs[i].type='text';
			inpPass[inputs[i].name]=true;
		}
		inputs[i].onfocus=inpFocus;
		inputs[i].onblur=inpBlur;
	};
}