/*
	Project Name : Lumire - Business & Consulting Multi-Purpose Template
	Author Company : SpecThemes
	Project Date: 27 Jan, 2019
	Template Developer: vsafaryan50@gmail.com
*/

/*
==============================================
TABLE OF CONTENT
==============================================

1. Owl Carousels
2. CountUp
3. Slider
4. Navbar
5. Youtube Video Section
6. Video Modal
7. Preloader
8. Scroll To Top
9. Pie Chart
10. WOW
11. Tabs
12. Input Number, Shopping Cart
13. iziModal
14. Shop Cart
15. Jusify
16. CountDowns
17. Fullscreen
18. Justified Gallery
19. Charts.js

==============================================
[END] TABLE OF CONTENT
==============================================
*/

"use strict";



$(document).ready(function() {


/*------------------------------------
    1. Owl Carousel
--------------------------------------*/
    /*---------------------
    Services carousel
    -----------------------*/
    $('.services-carousel').owlCarousel({
        loop: false,
        smartSpeed: 850,
        responsiveClass: true,
        nav:true,
        navText: ["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
                margin: 15,
            },
            575: {
                items: 2,
                nav: false,
                dots: true,
                margin: 30,
            },
            1000: {
                items: 3,
                dots: false,
                margin: 30,
            }
        }
    })


    $('.services-carousel-2').owlCarousel({
        loop: false,
        smartSpeed: 850,
        responsiveClass: true,
        nav:true,
        navText: ["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
                margin: 15,
            },
            575: {
                items: 2,
                nav: false,
                dots: true,
                margin: 0,
            },
            1000: {
                items: 3,
                dots: false,
                margin: 0,
            }
        }
    })


    /*---------------------
    Testmonials carousel
    -----------------------*/
    $('.testmonials-carousel').owlCarousel({
        loop: false,
        smartSpeed: 850,
        responsiveClass: true,
        nav:true,
        navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
                margin: 15,
            },
            575: {
                items: 2,
                nav: false,
                dots: true,
                margin: 30,
            },
            1000: {
                items: 2,
                dots: false,
                margin: 0,
            }
        }
    })


    $('.testmonials-carousel-2').owlCarousel({
        loop: false,
        smartSpeed: 850,
        responsiveClass: true,
        nav:true,
        navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
                margin: 15,
            },
            575: {
                items: 1,
                nav: false,
                dots: true,
                margin: 30,
            },
            1000: {
                items: 1,
                nav: false,
                dots: false,
                margin: 30,
            }
        }
    })


    $('.testmonials-carousel-3').owlCarousel({
        loop: false,
        smartSpeed: 850,
        responsiveClass: true,
        nav:true,
        navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
                margin: 15,
            },
            575: {
                items: 1,
                nav: false,
                dots: true,
                margin: 30,
            },
            1000: {
                items: 1,
                nav: false,
                dots: false,
                margin: 30,
            }
        }
    })

    $('.testmonial-carousel-4').owlCarousel({
        loop: true,
        nav: false,
        navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
        responsiveClass: true,
        startPosition: 0,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                margin: 15,
                dots: 30,
            },
            600: {
                items: 2,
                margin: 20,
                dots: 30,
            },
            1000: {
                items: 3,
                margin: 30,
            }
        }
    })

    $('#testmonials-parallax').owlCarousel({
      dots: false,
      loop: false,
      nav: false,
      smartSpeed: 950,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
          dots: false,
        },
        600: {
          items: 1,
          margin: 0,
          dots: false,
        },
        1000: {
          items: 1,
          margin: 0,
        }
      }
    })


    /*---------------------
    Clients carousel
    -----------------------*/

    $('.clients-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 850,
        autoplayTimeout: 3000,
        responsiveClass: true,
        autoplayHoverPause:false,
        responsive: {
            0: {
                items: 2,
                margin: 50,
            },
            575: {
                items: 3,
                margin: 30,
            },
            1000: {
                items: 7,
                margin: 40,
            }
        }
    })



    /*---------------------
    Customiable Carousel
    -----------------------*/
  var owl_carousel = $("div.customizable-carousel");
  if(owl_carousel.length > 0) {  
     owl_carousel.each(function () {
      var $this = $(this),
          $items = ($this.data('items')) ? $this.data('items') : 1,
          $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
          $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
          $navarrows = ($this.data('nav-arrows')) ? $this.data('nav-arrows') : false,
          $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : false,
          $autospeed = ($this.attr('data-autospeed')) ? $this.data('autospeed') : 3500,
          $smartspeed = ($this.attr('data-smartspeed')) ? $this.data('smartspeed') : 950,
          $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
          $space = ($this.attr('data-space')) ? $this.data('space') : 15;    
     
          $(this).owlCarousel({
              loop: $loop,
              items: $items,
              responsive: {
                0:{items: $this.data('xs-items') ? $this.data('xs-items') : 1},
                575:{items: $this.data('sm-items') ? $this.data('sm-items') : 2},
                767:{items: $this.data('md-items') ? $this.data('md-items') : 3},
                1000:{items: $items}
              },
              dots: $navdots,
              autoplayTimeout:$autospeed,
              smartSpeed: $smartspeed,
              autoHeight:$autohgt,
              margin:$space,
              nav: $navarrows,
              navText:["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"],
              autoplay: $autoplay,
              autoplayHoverPause: true   
          }); 
     }); 
  }




/*------------------------------------
    2. CountUp
--------------------------------------*/  
  $('.countup').counterUp({
      delay: 25,
      time: 2500
  });



/*------------------------------------
    3. Slider
--------------------------------------*/
    /*---------------------
    Revolution Slider
    -----------------------*/
    if (typeof $.fn.revolution !== 'undefined') {
      $("#rev_slider").revolution({
        sliderType:"standard",
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:7000,
        navigation: {
          keyboardNavigation:"off",
          keyboard_direction: "horizontal",
          onHoverStop:"off",
          touch:{
            touchenabled:"on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
          }
        },
        viewPort: {
          enable:true,
          outof:"pause",
          visible_area:"80%"
        },
        navigation: {
          arrows: {
              enable: true,
              style: 'hesperiden',
              tmp: '',
              rtl: false,
              hide_onleave: false,
              hide_onmobile: true,
              hide_under: 0,
              hide_over: 9999,
              hide_delay: 200,
              hide_delay_mobile: 1200,

              left: {
                  container: 'slider',
                  h_align: 'left',
                  v_align: 'center',
                  h_offset: 20,
                  v_offset: 0
              },

              right: {
                  container: 'slider',
                  h_align: 'right',
                  v_align: 'center',
                  h_offset: 20,
                  v_offset: 0
              }
          }
        },
        responsiveLevels:[2048,1750,1192],
        gridwidth:[1180,1180,980],
        gridheight:[550],
        lazyType:"none",
        shadow:0,
        spinner:"off",
        stopLoop:"on",
        stopAfterLoops:0,
        shuffle:"off",
        autoHeight:"on",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
          simplifyAll:"off",
          nextSlideOnWindowFocus:"off",
          disableFocusListener:false,
        }
      });
    }
/*------------------------------------
    4. Navbar
--------------------------------------*/    

  /*---------------------
  Fixed Nav
  -----------------------*/
  $("#navigation1").navigation();
  $("#navigation1").fixed();

  /*---------------------
  Transparent Nav Options
  -----------------------*/
  if ($("#nav-transparent").length !== 0) {
    if ($(window).width() > 991){
      $("#nav-transparent #main_logo").css("display" , "none"); 
    }
    else{
      $("#nav-transparent #light_logo").css("display" , "none"); 
    }
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if ($(window).width() > 991){
        if (scroll > 30) {
          $(".navigation-fixed-wrapper").addClass("nav-white-bg");  
          $("#nav-transparent #main_logo").css("display" , "inline-block"); 
          $("#nav-transparent #light_logo").css("display" , "none"); 
        }
        else{
          $(".navigation-fixed-wrapper").removeClass("nav-white-bg"); 
          $("#nav-transparent #light_logo").css("display" , "inline-block");
          $("#nav-transparent #main_logo").css("display" , "none"); 
        }
      }
    })  
  }

  /*---------------------
  Nav Slide Effect
  -----------------------*/  
  $("#navigation2").navigation({
    effect: "slide"
  });
  
  /*---------------------
  Nav Zoom Effect
  -----------------------*/
  $("#navigation3").navigation({
    animationOnShow: "zoom-in",
    animationOnHide: "zoom-out"
  });
  
  /*---------------------
  Overlay Nav
  -----------------------*/    
  $("#navigation4").navigation({
    overlayColor: "rgba(0,0,0,0.6)"
  });

  /*---------------------
  Affix Nav
  -----------------------*/
  $("#navigation4").fixed({
    offset: 20
  });
  
  /*---------------------
  Hidden Nav
  -----------------------*/  
  $("#navigation5").navigation({
    hidden: true
  });

  if ($("#navigation-push").length !== 0) {
    if ($(window).width() > 991){
      $("#navigation-push").find($(".nav-menus-wrapper").addClass("nav-menus-wrapper-open"));
      $("#navigation-push").find($(".nav-menus-wrapper-close-button").hide());
      $("#navigation-push").find($(".small-size-header").hide());
    }
    else{
      $("#navigation5 #main_logo").clone().appendTo(".small-size-header-logo");
      $("#main_logo").css("display", "none");
      $("#navigation-push").find($(".nav-menus-wrapper").removeClass("nav-menus-wrapper-open"));  
    } 
  }

  /*---------------------
  Button Nav
  -----------------------*/
  $(".btn-show").on('click', function(){ 
    $("#navigation5").data("navigation").toggleOffcanvas();
  });
  
  $("#navigation6").navigation({
    offCanvasSide: "right"
  });

  /*---------------------
  Simple Nav
  -----------------------*/  
  $("#navigation7").navigation();

/*------------------------------------
    5. Youtube Video Section
--------------------------------------*/ 
  if($(".video-section").length !== 0) {
    $('.player').mb_YTPlayer();
  }

  if($(".main-video-section").length !== 0) {
    $('#main-video-play').mb_YTPlayer();
  } 


/*------------------------------------
    6. Video Modal
--------------------------------------*/ 
  $('.modal').on('hidden.bs.modal', function() {
    var $this = $(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });


/*------------------------------------
    7. Preloader
--------------------------------------*/ 
  $('#preloader').fadeOut('normall', function() {
      $(this).remove();
  });


/*------------------------------------
    8. Scroll To Top
--------------------------------------*/ 
  $(window).scroll(function(){
      if($(this).scrollTop() > 500) {
          $(".scroll-to-top").fadeIn(400);
          
      } else {
          $(".scroll-to-top").fadeOut(400);
      }
  });

  $(".scroll-to-top").on('click', function(event){
      event.preventDefault();
      $("html, body").animate({scrollTop: 0},600);
  });



/*------------------------------------
    9. Pie Chart
--------------------------------------*/  
  if ($('.chart').length > 0) {
      var $pieChart = $('.chart');
      $pieChart.each(function () {
          var $elem = $(this),
              pieChartSize = $elem.attr('data-size') || "120",
              pieChartAnimate = $elem.attr('data-animate') || "2100",
              pieChartWidth = $elem.attr('data-width') || "6",
              pieChartColor = $elem.attr('data-color') || "#2e52c2",
              pieChartTrackColor = $elem.attr('data-trackcolor') || "rgba(0,0,0,0.1)";
          $elem.find('span, i').css({
              'width': pieChartSize + 'px',
              'height': pieChartSize + 'px',
              'line-height': pieChartSize + 'px'
          });
          $elem.appear(function () {
              $elem.easyPieChart({
                  size: Number(pieChartSize),
                  animate: Number(pieChartAnimate),
                  trackColor: pieChartTrackColor,
                  lineWidth: Number(pieChartWidth),
                  barColor: pieChartColor,
                  scaleColor: false,
                  lineCap: 'round',
                  onStep: function (from, to, percent) {
                      $elem.find('span.percent').text(Math.round(percent));
                  }
              });
          });
      });
  };
      

/*------------------------------------
    10. WOW
--------------------------------------*/ 
  new WOW().init();

});


/*------------------------------------
    11. Tabs
--------------------------------------*/ 
  $('.tabs_animate').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
  });


/*------------------------------------
    12. Input Number, Shopping Cart
--------------------------------------*/ 
  /*---------------------
  Input Number
  -----------------------*/
  jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fas fa-caret-up"></i></div><div class="quantity-button quantity-down"><i class="fas fa-caret-down"></i></div></div>').insertAfter('.quantity input');
  jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.quantity-up'),
      btnDown = spinner.find('.quantity-down'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.on("click", function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.on("click", function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });


  /*---------------------
  Shopping Cart
  -----------------------*/
  $('.close-box').on("click", function () {
    $(this).parentsUntil('.row').slideToggle();
    return false;
  });



/*------------------------------------
    13. Modal
--------------------------------------*/ 
  $(".izimodal").iziModal({
      width: 800,
      top: null,
      bottom: null,
      borderBottom: false,
      padding: 0,
      radius: 3,
      zindex: 999999,
      iframe: false,
      iframeHeight: 400,
      iframeURL: null,
      focusInput: false,
      group: '',
      loop: false,
      arrowKeys: true,
      navigateCaption: true,
      navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
      history: false,
      restoreDefaultContent: true,
      autoOpen: 0, // Boolean, Number
      bodyOverflow: false,
      fullscreen: false,
      openFullscreen: false,
      closeOnEscape: true,
      closeButton: true,
      appendTo: 'body', // or false
      appendToOverlay: 'body', // or false
      overlay: true,
      overlayClose: true,
      overlayColor: 'rgba(0, 0, 0, .7)',
      timeout: false,
      timeoutProgressbar: false,
      pauseOnHover: false,
      timeoutProgressbarColor: 'rgba(255,255,255,0)',
      transitionIn: 'comingIn',
      transitionOut: 'comingOut',
      transitionInOverlay: 'fadeIn',
      transitionOutOverlay: 'fadeOut',
      onFullscreen: function(){},
      onResize: function(){},
      onOpening: function(){},
      onOpened: function(){},
      onClosing: function(){},
      onClosed: function(){},
      afterRender: function(){}
  });
  $(document).on('click', '.trigger', function (event) {
      event.preventDefault();
      $('.izimodal').iziModal('setZindex', 99999999);
      $('.izimodal').iziModal('open', { zindex: 99999999 });
      $('.izimodal').iziModal('open');
  });


/*------------------------------------
    14. Shop Cart
--------------------------------------*/
$('.close-box').on("click", function () {
    $(this).parentsUntil('#1').slideToggle();
    return false;
});


/*------------------------------------
    15. Justify
--------------------------------------*/
if ($('.justified-gallery').length > 0) {
    $(".justified-gallery").justifiedGallery();
    var $justifiedgallery = $('.justified-gallery');
    $justifiedgallery.each(function () {
        var $element = $(this),
            rowHeight = $element.attr('data-rowHeight') || "200",
            margins = $element.attr('data-margins') || "10"
        $element.appear(function () {
            $element.justifiedGallery({
                rowHeight: Number(rowHeight),
                margins: Number(margins),
            });
        });
    });
};

/*------------------------------------
    16. CountDowns
--------------------------------------*/ 
    $('.countdown').countdown($('.countdown').attr("data-enddate")).on('update.countdown', function (event) {
        $(this).html(event.strftime('' + '<div class="row"><div class="col-md-3 col-sm-6 col-3"><div class="countdown-box">%-D<h6>Days%!d</h6></div></div>' + '<div class="col-md-3 col-sm-6 col-3"><div class="countdown-box">%H<h6>Hours</h6></div></div>' + '<div class="col-md-3 col-sm-6 col-3"><div class="countdown-box">%M<h6>Minutes</h6></div></div>' + '<div class="col-md-3 col-sm-6 col-3"><div class="countdown-box">%S<h6>Seconds</h6></div></div></div>'));
    });



/*------------------------------------
    17. Fullscreen
--------------------------------------*/ 
    function fullScreenHeight() {
      var element = $(".full-height");
      var $minheight = $(window).height();
          if ($(".full-height").length > 0) {
              $(".full-height").css('min-height', $minheight);
          } else {
              element.css('min-height', $minheight);
          }
    }

    if ($(".full-height").length > 0) {
      fullScreenHeight();
    }



/*------------------------------------
    18. Justified Gallery
--------------------------------------*/
if ($('.justified_gallery').length > 0) {
    $(".justified_gallery").justifiedGallery();
    var $justifiedgallery = $('.justified_gallery');
    $justifiedgallery.each(function () {
        var $element = $(this),
            rowHeight = $element.attr('data-rowHeight') || "200",
            margins = $element.attr('data-margins') || "10"
        $element.appear(function () {
            $element.justifiedGallery({
                rowHeight: Number(rowHeight),
                margins: Number(margins),
            });
        });
    });
};


/*------------------------------------
    19. Charts.js
--------------------------------------*/
if($(".chartjs").length !== 0) {
    /*----------------
    Chart style 1
    ------------------*/
    var config = {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'April', 'May', 'June'],
            datasets: [{
                display: false,
                label: '',
                borderColor: window.chartColors.blue,
                backgroundColor: window.chartColors.blue,
                pointRadius: 4,
                borderWidth: 2,
                data: [10, 15, 20, 25, 27, 25, 23, 25],
                fill: false,
            }, {
                display: false,
                label: '',
                borderColor: window.chartColors.grey,
                backgroundColor: window.chartColors.grey,
                pointRadius: 4,
                borderWidth: 2,
                data: [25, 18, 16, 18, 20, 25, 30, 35],
                fill: false,
            }]
        },
        options: {
            legend: {
                display: false
            },
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Line Chart - Custom Information in Tooltip'
            },
            tooltips: {
                mode: 'index',
                callbacks: {
                    // Use the footer callback to display the sum of the items showing in the tooltip
                    footer: function(tooltipItems, data) {
                        var sum = 0;

                        tooltipItems.forEach(function(tooltipItem) {
                            sum += data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                        });
                        return 'Sum: ' + sum;
                    },
                },
                footerFontStyle: 'normal'
            },
            hover: {
                mode: 'index',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        show: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        show: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    };

    if($("#chart-1").length !== 0) {
        window.onload = function () {
            var ctx = document.getElementById('chart-1').getContext('2d');
            window.myLine = new Chart(ctx, config);
        };
    }

    /*----------------
    Chart style 2
    ------------------*/
    if($("#chart-2").length !== 0) {
        var ctx = document.getElementById('chart-2').getContext("2d");

        var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, '#46bfe2');
        gradientStroke.addColorStop(1, '#46bfe2');

        var gradientFill = ctx.createLinearGradient(0, 30, 0, 350);
        gradientFill.addColorStop(0, "rgba(70, 191, 226, 0.3)");
        gradientFill.addColorStop(1, "rgba(70, 191, 226, 0)");

        var chart_week = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'April', 'May', 'June'],
                datasets: [{
                    label: "Visit",
                    borderColor: gradientStroke,
                    pointBorderColor: gradientStroke,
                    pointBackgroundColor: gradientStroke,
                    pointHoverBackgroundColor: gradientStroke,
                    pointHoverBorderColor: gradientStroke,
                    pointBorderWidth: 0,
                    pointHoverRadius: 0,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    fill: true,
                    backgroundColor: gradientFill,
                    borderWidth: 2,
                    data: [10, 15, 20, 25, 27, 25, 23, 25],
                }]
            },
            options: {
                legend: {
                    display: false,
                    position: "bottom"
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 50,
                            padding: 10
                        },
                        gridLines: {
                            drawTicks: false,
                            display: true
                        }

                    }],
                    xAxes: [{
                        gridLines: {
                            display: true,
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            display: true,
                            padding: 0,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        });
    }
}

if($(".error-3").length !== 0) {
    {
        setTimeout(() => document.body.classList.add('render'), 60);
        const navdemos = Array.from(document.querySelectorAll('nav.demos > .demo'));
        const total = navdemos.length;
        const current = navdemos.findIndex(el => el.classList.contains('demo--current'));
        const navigate = (linkEl) => {
            document.body.classList.remove('render');
            document.body.addEventListener('transitionend', () => window.location = linkEl.href);
        };
        navdemos.forEach(link => link.addEventListener('click', (ev) => {
            ev.preventDefault();
            navigate(ev.target);
        }));
        imagesLoaded('.glitch__img', {background: true}, () => {
            document.body.classList.remove('loading');
            document.body.classList.add('imgloaded');
        });
    }
}


/*------------------------------------
    Color Schemes
--------------------------------------*/
$("#style-switcher a" ).on("click", function(){
    $("#style-switcher").toggleClass('opened');
    return false;
})

$(".style1" ).on("click", function(){
    $("#main_styles" ).attr("href", "css/styles.css" );
    $("#main_logo" ).attr("src", "img/logos/logo.png" );
    if($("#light_logo").length !== 0) {
        $("#light_logo").attr("src", "img/logos/logo-light.png");
    }
    $("#footer_logo" ).attr("src", "img/logos/logo-footer.png" );
    return false;
});

$(".style2" ).on("click", function(){
    $("#main_styles" ).attr("href", "css/styles-2.css" );
    $("#main_logo" ).attr("src", "img/logos/logo-2.png" );
    if($("#light_logo").length !== 0) {
        $("#light_logo").attr("src", "img/logos/logo-light-2.png");
    }
    $("#footer_logo" ).attr("src", "img/logos/logo-footer-2.png" );
    return false;
});

$(".style3" ).on("click", function(){
    $("#main_styles" ).attr("href", "css/styles-3.css" );
    $("#main_logo" ).attr("src", "img/logos/logo-3.png" );
    if($("#light_logo").length !== 0) {
        $("#light_logo").attr("src", "img/logos/logo-light-3.png");
    }
    $("#footer_logo" ).attr("src", "img/logos/logo-footer-3.png" );
    return false;
});

$(".style4" ).on("click", function(){
    $("#main_styles" ).attr("href", "css/styles-4.css" );
    $("#main_logo" ).attr("src", "img/logos/logo-4.png" );
    if($("#light_logo").length !== 0) {
        $("#light_logo").attr("src", "img/logos/logo-light-4.png");
    }
    $("#footer_logo" ).attr("src", "img/logos/logo-footer-4.png" );
    return false;
});

$(".style5" ).on("click", function(){
    $("#main_styles" ).attr("href", "css/styles-5.css" );
    $("#main_logo" ).attr("src", "img/logos/logo-5.png" );
    if($("#light_logo").length !== 0) {
        $("#light_logo").attr("src", "img/logos/logo-light-5.png");
    }
    $("#footer_logo" ).attr("src", "img/logos/logo-footer-5.png" );
    return false;
});

$(".style6" ).on("click", function(){
    $("#main_styles" ).attr("href", "css/styles-6.css" );
    $("#main_logo" ).attr("src", "img/logos/logo-6.png" );
    if($("#light_logo").length !== 0) {
        $("#light_logo").attr("src", "img/logos/logo-light-6.png");
    }
    $("#footer_logo" ).attr("src", "img/logos/logo-footer-6.png" );
    return false;
});