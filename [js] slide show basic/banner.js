var picWidth = 980,
currentSlide = 0,
divScrl, liBtns, picsLen, go2slide, nextSlide, prvSlide;

window.onload=function(){
	
	divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	liBtns = document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	picsLen = liBtns.length;

	go2slide = function (n){
		if(n>=picsLen) n=0;
		if(n<0) n=picsLen-1;
		
		divScrl.style.left = -n*picWidth + 'px';
		currentSlide=n;
	};
	
	nextSlide = function (){
		go2slide(currentSlide+1)
	};
	prvSlide = function (){
		go2slide(currentSlide-1)
	};

	for(var i=0;i<picsLen;i++){
		(function(j){
			liBtns.item(j).onclick=function(){
				go2slide(j);
			}
		})(i);
	}
	
	setInterval(nextSlide,5000);
	
}
