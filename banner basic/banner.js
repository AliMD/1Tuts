
window.onload=function(){
	
	var picWidth = 980;
	
	var divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	var liBtns=document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	for(var i=0;i<liBtns.length;i++){
		(function(index){
			liBtns.item(index).onclick=function(){
				alert(index);
				divScrl.style.left = -index*picWidth + 'px';
			}
		})(i);
	}
	
}
