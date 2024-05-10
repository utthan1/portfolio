//Page Content Loading

if( $('#loading').length ){
  document.addEventListener(
    "DOMContentLoaded",
    function() {
      setTimeout(function() {    document.getElementById("loading").className = "a09_slideInUp";
      }, 100);
    },
    false
  );
}
//Page Content Loading



//LODER
!function(a){a.fn.preloadinator=function(e){"use strict";var o=a.extend({scroll:!1,minTime:0,animation:"fadeOut",animationDuration:400,afterDisableScroll:function(){},afterEnableScroll:function(){},afterRemovePreloader:function(){}},e),n=this,r=(new Date).getTime();return a.fn.preloadinator.disableScroll=function(){a(".bodyloader").css("overflow","hidden"),"function"==typeof o.afterDisableScroll&&o.afterDisableScroll.call(this)},a.fn.preloadinator.enableScroll=function(){a(".bodyloader").css("overflow","auto"),"function"==typeof o.afterEnableScroll&&o.afterEnableScroll.call(this)},a.fn.preloadinator.removePreloader=function(){a(n)[o.animation](o.animationDuration,function(){!1===o.scroll&&a.fn.preloadinator.enableScroll(),"function"==typeof o.afterRemovePreloader&&o.afterRemovePreloader.call(this)})},a.fn.preloadinator.minTimeElapsed=function(){return(new Date).getTime()-r>=o.minTime},!1===o.scroll&&a.fn.preloadinator.disableScroll(),a(window).on("load",function(){if(a.fn.preloadinator.minTimeElapsed())a.fn.preloadinator.removePreloader();else{var e=(new Date).getTime()-r;setTimeout(a.fn.preloadinator.removePreloader,o.minTime-e)}}),this}}(jQuery);
$('.js-preloader').preloadinator({
	minTime: 2000
});
//LODER END	


//slide box
function click_sld() {
document.getElementById("pollsdropdown").classList.toggle("polls_show");
};
//slide box end


//===sticky HEADER START
$(window).scroll(function(){
if ($(window).scrollTop() >= 100) {
   $('.stickynav09').addClass('fixed-header');
}
else {
   $('.stickynav09').removeClass('fixed-header');
}
});
//===sticky HEADER END

//=== HamBurger  MENU HEADER  
$(function() {
  function slideMenu() {
    var activeState = $(".menu-list09").hasClass("active");
    // $(".menu-list09").animate({top: activeState ? "0%" : "-100%"}, 400);
    $(".menu-list09").animate({ }, 400);
  }
  $("#menu-wrapper09").click(function(event) {
    event.stopPropagation();
    $("#hamburger-menu09").toggleClass("open");
    $(".menu-list09").toggleClass("active");
    slideMenu();

    $("body").toggleClass("hamburgermenu-active");
  });

  $(".menu-list09").find(".accordion-toggle").click(function() {
    $(this).next().toggleClass("open").slideToggle("fast");
    $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");

    $(".menu-list09 .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
    $(".menu-list09 .accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
  });
});
//=== HamBurger MENU HEADER   END

//=================================WOW START
$(function () {
var $win = $(window);

$win.scroll(function () {
   if ($win.scrollTop() == 0)
		wow.init();
});
});
//=================================WOW END

//=================================GO TOP START
var btn = $('#go_top');
$(window).scroll(function() {
if ($(window).scrollTop() > 300) {
btn.addClass('show');
} else {
btn.removeClass('show');
}
});
btn.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '300');
});
//=================================GO TOP END

//================================= Search
function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            $('.search-wrapper input').focus();
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            // container.find('.search-input').val('');
            $('.search-result').removeClass('active');
        }
}
//================================= Search END

//=================================Year Tabs
// Javascript to enable link to tab
var hash = document.location.hash;
if (hash) {
console.log(hash);
$(".month-tabs a[href=\\"+hash+"]").tab('show');
} 

// Change hash for page-reload
$('.month-tabs a').on('shown.bs.tab', function (e) {
window.location.hash = e.target.hash;
});
//=================================Year Tabs END

//=================================Select State Menu
$('.btn_oandc').on('click', function(){
  $('body').toggleClass('state_menu_open');
});
//=================================Select State Menu END


//================================= Scroll bottom click to Id
$('.listen_month').click(function(){
$('html, body').animate({
	scrollTop: $("#timeline").offset().top
}, 100);
});

$('.timeline_col').click(function(){
$('html, body').animate({
	scrollTop: $("body").offset().top
}, 5);
});
//================================= Scroll bottom click to Id End

//================================= Selector Auto Width
$('.filter-bar select').change(function(){
  var text = $(this).find('option:selected').text()
  var $aux = $('<select/>').append($('<option/>').text(text))
  $(this).after($aux)
  $(this).width($aux.width())
  $aux.remove()
}).change()
//================================= Selector Auto Width End

//================================= Audio

if($('.audio').length){
  const audio = document.querySelector('audio');
  const container = document.querySelector('.container');
  const audioDuration = document.querySelector('.duration');
  const playButton = document.querySelector('.play-button');
  let isPlaying = false;

  const toggleAudio = (event) => {
    if (isPlaying) {
      audio.pause()
      isPlaying = false
      playButton.classList.remove('playing')
    } else {
      audio.play()
      isPlaying = true
      playButton.classList.add('playing')
    }
  }

  audio.onloadedmetadata = () => {
    let minutes = Math.floor(audio.duration / 60)
    let seconds = Math.floor(audio.duration - minutes * 60)
    audioDuration.innerHTML = `${minutes}:${seconds}`
  }
}

//================================= Audio End
