/**
 * Script padrão
 *
 * Neste arquivos você irá encontrar todos os scripts que controlam o comportamento
 * da aplicação, assim como plugins e dependências.
 *
 * Licensed under Creative Commons Attribution-ShareAlike 3.0 Unported
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright       Copyright 2012-2013, IMAGINAR (http://imaginar.com.br)
 * @license         CC BY-SA 3.0 (http://creativecommons.org/licenses/by-sa/3.0/)
 */

/*! Browser */
(function(d){var b=navigator.userAgent.toLowerCase(),c=b.indexOf("macintosh")!==-1?"macintosh":b.indexOf("windows")!==-1?"windows":b.indexOf("linux")!==-1?"linux":undefined,a=/(chrome)(?:.*chrome)?[ \/]([\w.]+)/.exec(b)||/(safari)(?:.*version)?[ \/]([\w.]+)/.exec(b)||/(opera)(?:.*version)?[ \/]([\w.]+)/.exec(b)||/(ie) ([\w.]+)/.exec(b)||!/compatible/.test(b)&&/(firefox)(?:.*firefox)?[ \/]([\w.]+)/.exec(b)||[];d("html").addClass(a[1]+" "+a[1]+parseInt(a[2],10)+" "+c+" "+navigator.platform);})(jQuery);

$(document).ready( function(){
    "use strict";

  

// Sistema de botão fexar vídeo.
$(".close").click(function(){
	$(".teste").hide("slow");
});

  $('.olaola').animate({'margin-left': '200px'},1500);

$('.focus').click(function(){
	$(this).select();
});

/* --------------------------------------------------------------
              FANCYBOX
--------------------------------------------------------------  */

  $('.fancybox').fancybox();


  $(".various").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });



/* --------------------------------------------------------------
              DISCOGRAFIA
--------------------------------------------------------------  */

    $('.acao-musica')
        .on('click', '.ouvir', function(e){
            e.preventDefault();
            $('audio').attr('src', $(this).attr('data-video'));
        })


  // função click na parte de video, onde clica na miniatura e abre o video encima grande
    $('.mais-videos')
        .on('click', '.video-miniatura a', function(e){
            e.preventDefault();
            $('iframe').attr('src', '//www.youtube.com/embed/' + $(this).attr('data-video'));
            $('teste').html($(this).attr('testee'));
        })





/* --------------------------------------------------------------
              ACCORDION
--------------------------------------------------------------  */

  $("#accordion li .content-accordion").first().show();
  $('#accordion > li > span').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#accordion li .content-accordion').slideUp();
      $(this).next().slideToggle();
      $('#accordion li span').removeClass('active');
      $(this).addClass('active');
    }
  });


//$("#header").height($( window ).height());
function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = $(window).width();
    var height = $(window).height();

    $('#header').width(width);      // Display the width
    $('#header').height(height);    // Display the height
    $("#header a").css("top", height-100);
};
$(document).ready(jqUpdateSize);    // When the page first loads
$(window).resize(jqUpdateSize);     // When the browser changes size


});


