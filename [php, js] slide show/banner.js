var picWidth = 980,
currentSlide = 0,
lastSlide = 0,
autoPlayDelay = 5000,
autoPlayTimer,
autoPlayFn,
stopAutoPlay,
startAutoPlay,
divScrl, ulBtns, liBtns, picsLen, go2slide, nextSlide, prvSlide;

window.onload=function(){
	
	divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	ulBtns = document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0);
	liBtns = ulBtns.getElementsByTagName('li');
	
	picsLen = liBtns.length;
	
	divScrl.style.width = (picsLen*picWidth+100) +'px';
	ulBtns.style.width = (35*picsLen+5) +'px'; // 35 = li width + li margin right (style.css)

	go2slide = function (n){
		if(n>=picsLen) n=0;
		if(n<0) n=picsLen-1;
		
		divScrl.style.left = -n*picWidth + 'px';

		lastSlide=currentSlide;
		currentSlide=n;

		liBtns.item(lastSlide).className=''; // clear last li class (remove active)
		liBtns.item(currentSlide).className='active'; // swap active class to current li (slide)
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
				resetAutoPlay(); // skip 1 timer step for longer wait on sellected slide
				go2slide(j);
			}
		})(i);
	}
	
	stopAutoPlay = function (){
		if(!autoPlayTimer) return; // exit in no timer active.
		clearTimeout(autoPlayTimer);
		autoPlayTimer=0;
	};
	startAutoPlay = function (){
		autoPlayTimer = setTimeout(autoPlayFn,autoPlayDelay);
	};
	resetAutoPlay = function (){
		stopAutoPlay();
		startAutoPlay(); // set again out timer for disable fast swiching ;)
	};

	(autoPlayFn = function(){
		if(autoPlayTimer) nextSlide(); // skip 1 timer step
		 else go2slide(currentSlide); //set active li and init setting for init slide.
		startAutoPlay(); // prevent duplicate codding.
	})();// run for start timer (autoPlayTimer is false then skip nextSlide in form load)

}
