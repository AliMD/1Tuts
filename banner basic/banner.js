
window.onload=function(){
	
	var picWidth = 980;
	
	var divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	var liBtns=document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	var picsLen = liBtns.length;
	
	var currentSlide = 0;
	function go2slide(n){
		if(n>=picsLen) n=0;
		if(n<0) n=picsLen-1;
		
		divScrl.style.left = -n*picWidth + 'px';
		currentSlide=n;
	}
	
	function nextSlide(){
		go2slide(currentSlide+1)
	}
	function prvSlide(){
		go2slide(currentSlide-1)
	}

	for(var i=0;i<picsLen;i++){
		(function(j){
			liBtns.item(j).onclick=function(){
				go2slide(j);
			}
		})(i);
	}
	
	document.getElementById('next').onclick=nextSlide; //test
	document.getElementById('prv').onclick=prvSlide;
	
}
