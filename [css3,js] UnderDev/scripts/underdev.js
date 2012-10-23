// Zepto/jQuery fadeLoop plugin for fade slide show effects by ali.md

(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				delay : 2000,
				startIndex : -1,
				fadeFirstImage : true,
				zIndex : -3,
				zIndexAct : -2
			},options);

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0}
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			pics.css(fadeOut).css({'z-index':options.zIndex});
			options.fadeFirstImage || pics.eq(0).css(fadeIn).css({'z-index':options.zIndexAct});

			(nextPic=function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease,function(){
					 $(this).css({'z-index':options.zIndex});
				});
				indx=indx<plen-1?indx+1:0;
				pics.eq(indx).css({'z-index':options.zIndexAct}).animate(fadeIn,options.duration,ease,function(){
					setTimeout(nextPic,options.freez);
				});
			})();
		}
	});

	$(function(){
		$('.backimg > div').fadeLoop({
			duration : 1000, // zaman animation ha
			freez : 1500, // zaman tavaghof barye har slide
			zIndex : -3, // z-index hameye slide ha dar halate addi
			zIndexAct : -2 // z-index slide active ke bayad balatar bashe ta link ha ghabel click shodan bashan
		});
	});

})(window.Zepto || window.jQuery);