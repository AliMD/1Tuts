
window.onload=function(){
	
	var bannerWidth = 980;
	
	var divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	var liBtns=document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	for(var i=0;i<liBtns.length;i++){
		(function(i){
			liBtns.item(i).onclick=function(){
				divScrl.style.left= (-i*bannerWidth) + 'px';
			}
		})(i);
	}
	
}
