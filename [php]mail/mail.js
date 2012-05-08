	window.onload = function(){
		document.body.className = '';
		
		var myform = document.forms.item(0);
		
		myform.onsubmit = function(){
			
			var ret = true;
			
			for(var i=0;i<myform.elements.length;i++){
				if(myform.elements.item(i).className!='ok'){
					ret = false;
					break;
				}
			}
			
			return ret;
		}
		
		for (var i=0;i<myform.elements.length;i++){
			
			var inp = myform.elements.item(i);
			
			if (inp.type!='text' && inp.type!='textarea'){
				continue;
			}
			
			inp.onfocus = function(){
				if (this.value == this.defaultValue){
					this.value = '';
				}
			}
	
			inp.onblur = function(){
				
				if (this.value!=''){
					this.className='ok';
				}else{
					this.className='nok'
				}
				
				if (this.value == ''){
					this.value = this.defaultValue;
				}
				
			}
		}
	}
