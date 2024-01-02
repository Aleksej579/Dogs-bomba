//loading content
$(document).ready(function() {
    var hash = window.location.hash.substr(1);
    var href = $('#catalog  li a').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-18)){
            var toLoad = hash+'.html #aside';
            $('#aside-insert').load(toLoad);
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
      
        // var buttonBuy = $(".cart-buy-button");
        // console.log(buttonBuy[0]);
        // if (buttonBuy[0]) {
        //     buttonBuy[0].click(function() {
        //         alert( "Handler for .click() called." );
        //     });
        // }
        
    }
    function hideLoader() {
      $('#load').fadeOut('normal');
    }
    return false;
    });
});

//preview categories
function show(id) {
    document.getElementById(id).style.display = "block";
}
function hide(id) {
    document.getElementById(id).style.display = "none";
}

//slider
$(function() {      
  var width=$('.slider-box').width();
      interval = 4000;
 
  $('.slider img:last').clone().prependTo('.slider');
  $('.slider img').eq(1).clone().appendTo('.slider');
  $('.slider').css('margin-left', -width);
  setInterval('animation()', interval);
});

function animation(){
  var margin = parseInt($('.slider').css('marginLeft'));
      width=$('.slider-box').width(),
      slidersAmount=$('.slider').children().length;
  if(margin!=(-width*(slidersAmount-1)))
  {
    margin=margin-width;
  }else{
    $('.slider').css('margin-left', -width);
    margin=-width*2;         
  }
  $('.slider').animate({marginLeft:margin},1000);
}

//scroll
 $(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });
});
