/*jshint strict:true, es5:true, forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, undef:true, unused:true, nonew:true, browser:true, devel:true, indent:2, boss:true, curly:false, immed:false, latedef:true, newcap:true, plusplus:false, trailing:true, maxparams:3, maxerr:100, debug:false, asi:false, evil:false, expr:true, eqnull:false, esnext:false, funcscope:false, globalstrict:false, loopfunc:false */
(function($,undefined){
  "use strict";

  $(function(){
    var train = $('div.slideshow div.train'),
      lists = $('div.slideshow ul.btns li a'),
      currentSlide = 0,
      go2slide = function(n){
        if(n>lists.length-1) n=0;
        if(n<0) n = lists.length-1;
        train.css({
          left: -450*n
        });
        lists.eq(currentSlide).removeClass('active');
        lists.eq(n).addClass('active');
        currentSlide=n;
      };

    $('div.slideshow .next').click(function(){
      go2slide(currentSlide+1);
    });

    $('div.slideshow .previous').click(function(){
      go2slide(currentSlide-1);
    });

    $.address.change(function(evt){
      console.log(evt.pathNames);

      if(!evt.pathNames.length){
        $.address.value('/slide/0');
      }

      if(evt.pathNames[0]==='slide'){
        go2slide(evt.pathNames[1]);
      }
    })

    lists.address();
   
  });
})(window.Zepto || window.jQuery);