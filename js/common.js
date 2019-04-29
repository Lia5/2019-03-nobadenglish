$(function() {
	
//slider 
if(jQuery('.reviews__slider').length) {
    $('.reviews__slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      prevArrow: '<div class="arrow-prev"></div>',
    //   prevArrow: '<svg class="svg-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path></svg>',
      nextArrow: '<div class="arrow-next"></div>',
    //   nextArrow: '<svg class="svg-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>',
    });
  }

// if( window.innerWidth < 1040 || window.screen.width < 1040){
if(jQuery('.directions__items').length) {
    $('.directions__items').slick({
      slidesToShow: 6,
      slidesToScroll: 1,infinite: true,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1040,
          settings: {
            slidesToShow: 3.2,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: false
          }
        }  

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  }
// }
if($('.styled').length) {
		$('.styled').styler();
	};

//menu
    var menu = document.querySelector('.menu-toggle');
    menu.addEventListener('click', function(){
        var nav = document.querySelector('.main-menu');
        nav.classList.toggle('active');
        var navGamb = document.querySelector('.menu-toggle');
        navGamb.classList.toggle('active');
    });

//footer
var footerBtn = document.querySelector('.footer__btn');
    footerBtn.addEventListener('click', function(){
        var footerList = document.querySelector('.footer__list');
        footerList.classList.toggle('active');
    });

//tabs
    (function($) {
      $(function() {
       
        $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
          $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });
       
      });
      })(jQuery);
      



});



document.addEventListener('DOMContentLoaded', function(){



});
