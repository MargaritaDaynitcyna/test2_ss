(function($) {
  $.fn.emc = function(options) {
    
    var defaults = {
      key: [],
      scoring: "normal",
      progress: true
    },
    settings = $.extend(defaults,options),
    $quizItems = $('[data-quiz-item]'),
    $choices = $('[data-choices]'),
    itemCount = $quizItems.length,
    chosen = [],
    $option = null,
    $label = null;
    
   emcInit();
    
   if (settings.progress) {
      var $bar = $('#emc-progress'),
          $inner = $('<div id="emc-progress_inner"></div>'),
          $perc = $('<span id="emc-progress_ind">0/'+itemCount+'</span>');
      $bar.append($inner).prepend($perc);
    }
    
    function emcInit() {
      $quizItems.each( function(index,value) {
      var $this = $(this),
          $choiceEl = $this.find('.choices'),
          choices = $choiceEl.data('choices');
        for (var i = 0; i < choices.length; i++) {
          if (index == 1) {
            $option = $('<input name="'+index+'" id="'+index+'_'+i+'" type="radio" value="'+choices[i]+'" onclick="Howold(this.value)">');
            $label = $('<label for="'+index+'_'+i+'">'+choices[i]+'</label>');
            $choiceEl.append($option).append($label);
          } else {
            $option = $('<input name="'+index+'" id="'+index+'_'+i+'" type="radio">');
            $label = $('<label for="'+index+'_'+i+'">'+choices[i]+'</label>');
            $choiceEl.append($option).append($label);
          };
        	
          $option.on( 'change', function() {
            $this.addClass('item-correct');
            if ($('.dontUsed').length == 1 && $this.hasClass('dontUsed')) {
              $this.attr('id', 'focus-quest');
            } else {
              $this.removeAttr('id');
            };
            if (!($('section').hasClass('start-quizz'))) {
              // $('a').css('pointer-events', 'none');
              // $('img:not(.cross)').unwrap('a');
              $('a:not(.cross)').attr('data-scroll', '#next-quest');

              $('a').addClass('nonvitr');
              $('a').addClass('nonquizz');
              $('a').removeAttr("href");

              $('.btn').css('pointer-events', 'auto');
              $('.btn').attr("href", "//" + offerDomain + "/click.php?lp=1");
              $('footer').css('display', 'block');
              setTimeout(function () {
                $('footer').css('opacity', '1');
              }, 100);
              $('footer').fadeIn('slow', 'linear');
              $('#ssbutton').html('<span class="en">Answer all the questions and get a discount</span><span class="es">Responda todas las preguntas y obtener un descuento en la botella</span>');
              $('#ssbutton').attr('id', 'ssbutton-fix');
            };
            $('section').addClass('start-quizz');
            $this.removeClass('dontUsed');
            return getChosen();
          }); 
        }
      });
    }
    
    function getChosen() {
      chosen = [];
      $choices.each( function() {
        var $inputs = $(this).find('input[type="radio"]');
        $inputs.each( function(index,value) {
          if($(this).is(':checked')) {
            chosen.push(index + 1);
          }
        });
      });
      getProgress();
    }
    
    function getProgress() {
      var prog = (chosen.length / itemCount) * 100 + "%",
          $submit = $('#emc-submit');
      if (settings.progress) {
        $perc.html('<span class="en">You got a </span><span class="es">Tienes un </span>' + Math.round(chosen.length * 50/6) + '<span class="en">% discount</span><span class="es">% de descuento</span>');        $inner.css({width: prog});
      }
      if (chosen.length === itemCount) {

        // cookie
        var expires = new Date();
        expires.setDate(expires.getDate() + 7);
        expires.toUTCString();
        var quizzPass = 'quizzpass';
        document.cookie = [
          'quizzPass=' + quizzPass
          , '; expires=' + expires // используем expires, max-age не поддерживается в ИЕ
          // , '; path=/'
          , '; domain=' + document.location.host
        ].join('');
        // end cookie
  
        // tjcookie
        function push_tj_cookie() {
            const elem = document.createElement("img");
            elem.src = 'https://ctrack.trafficjunky.net/ctrack?action=list&type=add&id=quizzpass&context=bvz&cookiename=retargeting&age=43200&maxcookiecount=10';
        };
        push_tj_cookie()
        // tjcookie

        $submit.addClass('ready-show');
        $('.question').css('display', 'none');
        $('.question-num').css('display', 'none');
        $('.choices').css('display', 'none');

        setTimeout(function () {
          $('#emc-progress').css('opacity', '0');
          $('#next-min').css('opacity', '0');
          setTimeout(function () {
            $('#emc-progress').css('display', 'none');
            $('#next-min').css('display', 'none');
            $('#progress-button').css('display', 'block');
            setTimeout(function () {
              $('#progress-button').css('opacity', '1');
            }, 100);
          }, 150);
        }, 1000);

        $('.stock').css('display', 'block');
        // $('a').css('pointer-events', 'auto');
        $('#quest-box section:not(#focus-quest)').css('display', 'none');
        // $('img:not(.cross)').wrap('<a href=""></a>');
        $('a').removeClass('nonvitr');
        $('a').attr("href", "//" + offerDomain +"/click.php?lp=1");
        $('section').removeClass('item-correct');
        if (!($('#quest-box').is(':empty'))) {
          $('#ssbutton-fix').css('display', 'none');
        } else {
          $('#ssbutton-fix').attr('id', 'ssbutton');
          $('#ssbutton').html('<span class="en">Get your discount</span><span class="es">Obtenga su 50% de descuento</span>');
        };
        $('html, body').animate({
          scrollTop: $('#focus-quest').offset().top
        }, 500);
      }
    }
  }
}(jQuery));


$(document).emc({
});

//Перенос к неотвеченным Start
var target = $('#quest-box');
var targetPos;
var winHeight;
var scrollToElem;

setTimeout(function () {
  // target = $('#quest-box');
  targetPos = target.offset().top;
  winHeight = $(window).height();
  scrollToElem = targetPos - winHeight;
  oneTimeScroll = false;
  $(window).scroll(function () {
    var winScrollTop = $(this).scrollTop();
    if (winScrollTop > scrollToElem) {
      if ($('.dontUsed').length != 0) {
        $('.next-min').css('display', 'flex');
      };
      $('#emc-progress_ind').css('width', 'calc(100% - 55px)');
      $('#emc-progress').css('width', 'calc(100% - 55px)');
      if ($('section').hasClass('start-quizz')) {
        $('#description-quest').css('display', 'none');
        $('#quest-box').append($('#wrapper>.dontUsed'));
      };

      if (!oneTimeScroll && $('section').hasClass('start-quizz') && $('.dontUsed').length != 0) {
        $('html, body').animate({
          scrollTop: $('#ssbutton-fix').offset().top
        }, 500);
        oneTimeScroll = true;
      };
    };
  });
}, 2000);

//Дополнение к переключению языка
$('#switcher-en').click(function () {
  targetPos = target.offset().top;
  winHeight = $(window).height();
  scrollToElem = targetPos - winHeight;
});
$('#switcher-es').click(function () {
  targetPos = target.offset().top;
  winHeight = $(window).height();
  scrollToElem = targetPos - winHeight;
});
//Перенос к неотвеченным End

$('.next-min').click(function () {
  var scrollName = $(this).attr('data-scroll'),
    scrollElem = $(scrollName),
    scrollTop = scrollElem.offset().top;

  $('html, body').animate({
    scrollTop: scrollTop
  }, 500);
});

$('a').click(function () {
  if (this.hasAttribute('data-scroll')) {
    var scrollName = $(this).attr('data-scroll'),
    scrollElem = $(scrollName),
    scrollTop = scrollElem.offset().top;

    $('html, body').animate({
      scrollTop: scrollTop
    }, 500);
  };
});

//cookie
function getCookie(quizzPass) {
  var matches = document.cookie.match(new RegExp("(?:^|; )" + quizzPass.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
  return matches ? decodeURIComponent(matches[1]) : "18+";
}

if (getCookie('quizzPass') === 'quizzpass') {
  $('section:not(:first)').css('display', 'none');
  $('section:first .stock-title').html('<b><span class="en">YOU HAVE ALREADY PASSED THE TEST</span><span class="es">YA HAS PASADO LA PRUEBA</span></b>');
  $('section:first .stock-text:eq(1)').html('<span class="en">At the moment the priority in the study was given to the age group of <b>'+getCookie('howoldCookie')+'</b></span><span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b>'+getCookie('howoldCookie')+'</b></span>');
  $('#doktoro').css('width', '175px');
  $('#description-quest').css('display', 'none');
  $('.question').css('display', 'none');
  $('.question-num').css('display', 'none');
  $('.choices').css('display', 'none');
  $('.stock').css('display', 'block');
  $('a').addClass('nonquizz');
  $('a').attr("href", "//" + offerDomain + "/click.php?lp=1");
  $('section').removeClass('item-correct');
  $('#ssbutton-fix').attr('id', 'ssbutton');
  $('#ssbutton').html('<span class="en">Get your 50% discount</span><span class="es">Obtenga su 50% de descuento</span>');
}
// end cookie