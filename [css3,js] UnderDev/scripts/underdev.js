// Zepto/jQuery fadeLoop plugin for fade slide show effects by ali.md

(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				freez : 1500,
				delay : 10,
				startIndex : 0,
				fadeFirstImage : true,
				zIndex : -3,
				zIndexAct : -2
			},options);

			options.startIndex--;

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			var nextPic = function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease,function(){
					 $(this).css({'z-index':options.zIndex});

				});
				indx=indx<plen-1?indx+1:0;
				setTimeout(function(){
					pics.eq(indx).css({'z-index':options.zIndexAct}).animate(fadeIn,options.duration,ease,function(){
						setTimeout(nextPic,options.freez);
					});
				},options.delay+10);
			};

			pics.css(fadeOut).css({'z-index':options.zIndex});

			if(!options.fadeFirstImage){
				pics.eq(0).css(fadeIn).css({'z-index':options.zIndexAct});
				indx++;
				setTimeout(nextPic,options.freez);
			}else{
				nextPic();
			}
		}
	});

	$(function(){
		$('.backimg > div').fadeLoop({
			delay : 200, // vaghfe beyn fade slide ha
			freez : 3000, // zaman tavaghof barye har slide
			duration : 1300, // zaman animation ha
			zIndex : -3, // z-index hameye slide ha dar halate addi
			zIndexAct : -2, // z-index slide active ke bayad balatar bashe ta link ha ghabel click shodan bashan
			startIndex : 0, // pic avali
			fadeFirstImage : true // aya pic aval fade beshe ya na az ebteda bashe
		});
	});

})(window.Zepto || window.jQuery);