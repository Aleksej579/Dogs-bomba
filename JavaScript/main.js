//loading content----------------------------------------------

$(document).ready(function() {
    var hash = window.location.hash.substr(1);
    var href = $('#catalog  li a').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-18)){
            var toLoad = hash+'.html #aside';
            $('#aside-insert').load(toLoad)
        } 
    });
    $('#catalog  li a').click(function(){
    var toLoad = $(this).attr('href')+' #aside-insert';
    $('#aside').hide('fast',loadContent);
    window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-18);
    function loadContent() {
      $('#aside').load(toLoad,'',showNewContent())
    }
    function showNewContent() {
      $('#aside').show('normal',hideLoader());
    }
    function hideLoader() {
      $('#load').fadeOut('normal');
    }
    return false;
    });
});

'use strict';

//preview categories---------------------------------
function show(id) {
    document.getElementById(id).style.display = "block";
}
function hide(id) {
    document.getElementById(id).style.display = "none";
}

//slider--------------------------------------------------
$(function() {      
  var width=$('.slider-box').width();                     // Ширина слайдера.
      interval = 4000;                                    // Интервал смены слайдов.
 
  $('.slider img:last').clone().prependTo('.slider');     // Копия последнего слайда помещается в начало.
  $('.slider img').eq(1).clone().appendTo('.slider');     // Копия первого слайда помещается в конец.  
  $('.slider').css('margin-left', -width);                // Контейнер .slider сдвигается влево на ширину одного слайда.
  setInterval('animation()',interval);                    // Запускается функция animation(), выполняющая смену слайдов.
});
function animation(){
 
  var margin = parseInt($('.slider').css('marginLeft'));  // Текущее смещение блока .slider
      width=$('.slider-box').width(),                     // Ширина слайдера.
      slidersAmount=$('.slider').children().length;       // Количество слайдов в слайдере.
  if(margin!=(-width*(slidersAmount-1)))                  // Если текущий слайд не последний,
  {
    margin=margin-width;                                  // то значение margin уменьшается на ширину слайда.
  }else{                                                  // Если показан последний слайд,
    $('.slider').css('margin-left', -width);              // то блок .slider возвращается в начальное положение,
    margin=-width*2;         
  }
  $('.slider').animate({marginLeft:margin},1000);          // Блок .slider смещается влево на 1 слайд.
};


//scrol--------------------------------------------------
'use strict';
 $(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });
});
//--------------------------------------
