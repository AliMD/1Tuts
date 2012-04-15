
window.onload=function(){
	
	var picWidth = 980;
	
	var divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	var liBtns=document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	function go2slide(n){
		divScrl.style.left = -n*picWidth + 'px';
	}
	
	for(var i=0;i<liBtns.length;i++){
		(function(j){
			liBtns.item(j).onclick=function(){
				go2slide(j);
			}
		})(i);
	}
	
}
