// My JavaScript Document

window.onload = function (){
	
	var frm = document.forms.item(0);
	
	frm.onsubmit = function(){
		var ret = true;
		
		for(var i=0;i<frm.elements.length;i++){
			if(frm.elements.item(i).className!='ok'){
				ret=false;
				break;
			}
		}
		
		return ret;
	}
	
	for(var i=0;i<frm.elements.length;i++){
		
		var inp = frm.elements.item(i);
		
		if(inp.type!='text') continue;
		
		inp.onfocus = function(){
			this.value==this.defaultValue &&
				(this.value = '');
		}
		
		inp.onblur = function(){
			//if( this.value != '' && !isNaN(this.value) ) // ok - green
			
			if( this.value == '' || isNaN(this.value) || this.value<=0 ){ // nok red
				this.className = 'nok';
			}else{
				this.className = 'ok';
			}
			
			this.value == '' &&
				(this.value = this.defaultValue);
		}
		
	}
	
}