$(document).ready(function() {
//HOME PAGE SLIDER

if($('.homeslider').length){
  $(".homeslider").slick({
  autoplay:true,
  autoplaySpeed:6000,
  speed:600,
  slidesToShow:1,
  slidesToScroll:1,
  pauseOnHover:false,
  dots:true,
  pauseOnDotsHover:false,
  cssEase:'linear',
  fade:false,
  draggable:true,
  //prevArrow:'<button class="PrevArrow"></button>',
  //nextArrow:'<button class="NextArrow"></button>', 
  });
}


//gallery
if($('.amitshah_slider').length){
  $('.amitshah_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: false,
  dots:true,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 1,
  responsiveClass: true,
  responsive: {
    1000: { items: 1,  },
    500: {  items: 1,  },
    0: {  items: 1,  }
  }
  });
}


//Stories
if($('.stories_slider').length){
  $('.stories_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 4,
  responsiveClass: true,
  responsive: {
    1000: { items: 4,  },
    500: {  items: 2,  },
    0: {  items: 1,  }
  }
  });

}

//follow
if($('.follow_slider').length){
  $('.follow_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 4,
  responsiveClass: true,
  responsive: {
    1000: { items: 4,  },
    600: {  items: 2,  },
    300: {  items: 1,  }
  }
  });
}

//pioneer
if($('.pioneer_slider').length){
  $('.pioneer_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:true,
  rewind: true,
  autoplaySpeed: 1600,
  items: 3,
  responsiveClass: true,
  responsive: {
    1000: { items: 3,  },
    700: {  items: 2,  },
    0: {  items: 1,  }
  }
  });
}


//common_slider
if($('.common_slider').length){
  $('.common_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 4,
  responsiveClass: true,
  responsive: {
    1000: { items: 4,  },
    800: {  items: 3,  },
    600: {  items: 2,  },
    0: {  items: 1,  }
  }
  });

}



//gallery
if($('.gallery_slider').length){
  $('.gallery_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:true,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 1,
  responsiveClass: true,
  responsive: {
    1000: { items: 1,  },
    500: {  items: 1,  },
    0: {  items: 1,  }
  }
  });
}

//polls
if($('.polls_slider').length){
  $('.polls_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: false,
  dots:true,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 1,
  responsiveClass: true,
  responsive: {
    1000: { items: 1,  },
    500: {  items: 1,  },
    0: {  items: 1,  }
  }
  });
}
//polls end

//Life Beliefs
if($('.lifebeliefs_sld').length){
  $('.lifebeliefs_sld').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:true,
  rewind: true,
  autoplaySpeed: 1600,
  items: 1,
  responsiveClass: true,
  responsive: {
    1000: { items: 1,  },
    500: {  items: 1,  },
    0: {  items: 1,  }
  }
  });
}
//Life Beliefs End




//VIDEO SLIDER
if($('.slider-for').length){
  $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
  });
}

if($('.slider-nav').length){
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    vertical:true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:true,
    responsive: [
    {
        breakpoint: 992,
        settings: {
          vertical: false,
        }
    },
    {
      breakpoint: 768,
      settings: {
        vertical: false,
      }
    },
    {
      breakpoint: 580,
      settings: {
        vertical: false,
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 380,
      settings: {
        vertical: false,
        slidesToShow: 2,
      }
    }
    ]
});
}
//VIDEO SLIDER


/*//Journey
$('.journey-for').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    asNavFor: '.journey-nav',
  focusOnSelect: true
});
$('.journey-nav').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    vertical:false,
    asNavFor: '.journey-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:false,
    responsive: [
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 380,
      settings: {
        slidesToShow: 2,
      }
    }
    ]
});*/
//Journey End



//Timeline
/*$('.timeline_slider').owlCarousel({
loop: false,
margin:0,
nav: false,
dots:true,
autoplay:false,
rewind: true,
autoplaySpeed: 1600,
items: 1,
responsiveClass: true,
responsive: {
  1000: { items: 1,  },
  500: {  items: 1,  },
  0: {  items: 1,  }
}
})*/



if($('.category_flt_sldier').length){
  //Timeline
  $('.category_flt_sldier').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 8,
  onInitialized: fixOwl,
  onRefreshed: fixOwl,
  autoWidth: true,
  responsiveClass: true,
  responsive: {
    1000: { items: 7,  },
    500: {  items: 7,  },
    0: {  items: 1,  }
  }
  });
}

var fixOwl = function(){
  var $stage = $('.owl-stage'),
      stageW = $stage.width(),
      $el = $('.owl-item'),
      elW = 0;
  $el.each(function() {
      elW += $(this).width()+ +($(this).css("margin-right").slice(0, -2))
  });
  if ( elW > stageW ) {
      $stage.width( elW );
  };
}

//Timeline
if($('.join_me_slider').length){
  $('.join_me_slider').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 2,
  responsiveClass: true,
  responsive: {
    1000: { items: 2,  },
    500: {  items: 2,  },
    0: {  items: 1,  }
  }
  });
}


//slick slider A Brief History
if($('.brief_history_slider-nav').length){
    $('.brief_history_slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
  });

  // On before slide change
  $('.brief_history_slider-nav').on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('.slick-slide').removeClass('slick-active-first slick-active-last');
    $('.slick-active').eq(0).addClass('slick-active-first');
    $('.slick-active').eq(3).addClass('slick-active-last');

    var dataId = $('.slick-current').attr("data-slick-index");
    $target = $('.brief_history_slider-nav').find("[data-slick-index="+dataId+"]").data('target');
    $('.history_tabs li').removeClass('active');
    $('.history_tabs').find("[data-target="+$target+"]").addClass('active');
  }).trigger('afterChange');

  
}


// $('.brief_history_slider-nav').on('init', function(event, slick){
//     console.log("initialized")
// });

//slick slider A Brief History END




if($('.past_evnts').length){
$('.past_evnts').owlCarousel({
  loop: false,
  margin:0,
  nav: true,
  dots:false,
  autoplay:false,
  rewind: true,
  autoplaySpeed: 1600,
  items: 3,
  responsiveClass: true,
  responsive: {
    1000: { items: 3,  },
    800: {  items: 2,  },
    600: {  items: 2,  },
    0: {  items: 1,  }
  }
  });
}


});


$(function() {

  if($('.timeline-slide').length){

    $('.timeline-slide .readmore').click(function(e){
        e.preventDefault();
        $(this).parents('.trunc_content').hide();
        $(this).parents('.timeline-slide').find('.full_cont').slideDown();
    });
    $('.timeline-slide .readless').click(function(e){
        e.preventDefault();

        $(this).parents('.timeline-slide').find('.full_cont').slideUp(400, function() {
            $(this).parents('.timeline-slide').find('.trunc_content').show();
        });
    });
        
    $('.timeline-nav').slick({
        slidesToShow: 12,
        slidesToScroll: 1,
        rewind: true,
        loop: true,
        asNavFor: '.timeline-slider',
        autoplaySpeed: 1600,
        centerMode: false,
        focusOnSelect: true,
        mobileFirst: true,
        arrows: true,
        infinite: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 8,
                }
            },
            {
                breakpoint: 0,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                }
            }
        ]
    });

    $('.timeline-slider').slick({
        slidesToShow: 1,
        rewind: true,
        loop: true,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.timeline-nav',
        centerMode: true,
        cssEase: 'ease',
        edgeFriction: 0.5,
        mobileFirst: true,
        autoplay:true,
        autoplaySpeed: 5000,
        speed: 500,
        responsive: [{
                breakpoint: 0,
                settings: {
                    centerMode: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true
                }
            }
        ]
    });

    $('.timeline-nav').on('afterChange', function(event, slick, currentSlide){
       $dom =$(slick.$slides.get(currentSlide));
       $('.history_tabs li').removeClass('active');

        $target = $dom.data('target');
        $('#'+$target).addClass('active');
    });

    $('.history_tabs li').click(function(e){
        e.preventDefault();

        $('.history_tabs li').removeClass('active');
        $(this).addClass('active');

        $target = $(this).data('target');
        $('.timeline-nav .timeline-nav__item.'+$target+':first').trigger('click');
    });
    
  }

});

