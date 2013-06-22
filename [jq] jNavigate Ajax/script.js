/*jshint strict:true, es5:true, forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, undef:true, unused:true, nonew:true, browser:true, devel:true, indent:2, boss:true, curly:false, immed:false, latedef:true, newcap:true, plusplus:false, trailing:true, maxparams:3, maxerr:100, debug:false, asi:false, evil:false, expr:true, eqnull:false, esnext:false, funcscope:false, globalstrict:false, loopfunc:false */
(function($,undefined){
  "use strict";

  $(function(){ // doc ready

    // Ajax Navigation
    var
      $links = $('nav a'),
      $ajaxContent = $('.ajaxcontent'),
      aniDue = 1000,

      go2page = function(pageName){
        $ajaxContent.slideUp(aniDue,function(){
          $ajaxContent
            .load(pageName+'.html .ajaxcontent>.page')
            .slideDown(aniDue);
        });
      };

    $links.address(function(){
      var url = 'pages/' + $(this).attr('href');
      return url.substr(0,url.length-5);
    });

    $.address.change(function(evt){
      if(evt.pathNames[0]==='pages'){
        go2page(evt.pathNames[1]);
      }
    });

  });

})(window.jQuery);