/*=== Javascript function indexing hear===========

01.gsapAnimationImageRevel();
02.gsapScrollingText();

04.serviceHoverImageRevel();
06.swiperActivation();
07.tiltAnimation();
08.wowActive();
09.progressAvtivation();
10.counterUp();
11.radialProgress();
12.titleSkewUp();
13.scrollDiwnCircle();
14.bannerBgVideo();
15.textTitleAnimation__1();
16.counterJumpanimation();
17.featureJumpanimation();
18.paragraphBodyAnimation();
19.slideUpSkew();
20.slideUp();
21.slideLeft();
22.slideRight();
23.buttonMoveAnimation();
24.teamAnimation();
25.showRightRevel();
26.caseVarticleScroll();
27.titleOpacityWrap();
28.magicCoursor();
29.portfolioTenSwiper();
30.offcanvasMenu();
31.preloaderWithBannerActivation();
32.isotopeMasonry();
33.stickySidebar();
34.backToTopInit();
35.stickyHeader();
36.countDown();
37.rollingText();

==================================================*/

(function ($) {
    'use strict';
   
    var rtsJs = {
      m: function (e) {
        rtsJs.d();
        rtsJs.methods();
      },
      d: function (e) {
        this._window = $(window),
          this._document = $(document),
          this._body = $('body'),
          this._html = $('html')
      },
      methods: function (e) {
        rtsJs.swiperActivation();
        rtsJs.wowActive();
        rtsJs.videoActivation();
        rtsJs.salActive();
        rtsJs.counterUp();
        rtsJs.backToTopInit();
        rtsJs.stickyHeader();
        rtsJs.stickySidebar();      
        rtsJs.sideMenu();
        rtsJs.metismenu();
        rtsJs.preloader();
        rtsJs.tabActive();
      },
  
      swiperActivation: function(){
        $(document).ready(function(){

          // BRAND SLIDER
            var swiper = new Swiper(".rts-brand__slider", {
                slidesPerView: 6,
                spaceBetween: 40,
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
                },
                loop:true,
                breakpoints: {
                  1200: {
                    slidesPerView: 6,
                  },
                  900: {
                    slidesPerView:5,
                  },
                  768: {
                    slidesPerView: 5,
                  },
                  580: {
                    slidesPerView: 4,
                  },
                  450: {
                    slidesPerView: 3,
                  },
                  0: {
                    slidesPerView: 3,
                  }
                },
            });
            
            var swiper = new Swiper(".sh-brand__slider", {
                slidesPerView: 6,
                spaceBetween: 40,
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
                },
                 navigation: {
              nextEl: ".rts-next",
              prevEl: ".rts-prev",
          },
                loop:true,
                breakpoints: {
                  1200: {
                    slidesPerView: 6,
                  },
                  900: {
                    slidesPerView:5,
                  },
                  768: {
                    slidesPerView: 5,
                  },
                  580: {
                    slidesPerView: 4,
                  },
                  450: {
                    slidesPerView: 2,
                  },
                  0: {
                    slidesPerView: 2,
                  }
                },
            });

          // HOSTING TYPE SLIDER
          var swiper = new Swiper(".rts-hosting-type__slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            speed:1000,
            navigation: {
              nextEl: ".rts-next",
              prevEl: ".rts-prev",
          },
            loop:true,
            breakpoints: {
              1200: {
                slidesPerView: 4,
              },
              992: {
                slidesPerView:3,
              },
              768: {
                slidesPerView: 2,
              },
              600: {
                slidesPerView: 2,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });          
          
          // TESTIMONIAL SLIDER ONE
          var swiper = new Swiper(".testimonial__slider--first", {
            slidesPerView: 3,
            spaceBetween: 15,
            speed:1000,
            centeredSlides: true,
            loop:true,
            pagination: {
             el: '.rts-dot__button',
             clickable: true,
          },
           navigation: {
              nextEl: ".rts-next",
              prevEl: ".rts-prev",
          },
           autoplay: {
    delay: 3000,
  },
            breakpoints: {
              1200: {
                slidesPerView: 3,
              },
              992: {
                slidesPerView:3,
              },
              768: {
                slidesPerView: 2,
              },
              600: {
                slidesPerView: 2,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });

          // TESTIMONIAL SLIDER TWO
          var swiper = new Swiper(".testimonial-slider-two", {
            slidesPerView: 1.7,
            spaceBetween: 30,
            speed:1000,
            loop:true,
            centeredSlides: true,
            scrollbar: {
              el: ".rts-swiper-scrollbar",
              hide: false,
              draggable: true,
              dragSize: 350,
            },
            navigation: {
              nextEl: ".rts-next",
              prevEl: ".rts-prev",
          },
            breakpoints: {
              1200: {
                slidesPerView: 1.7,
              },
              900: {
                slidesPerView:2,
              },
              768: {
                slidesPerView: 2,
              },
              580: {
                slidesPerView: 1.5,
              },
              0: {
                slidesPerView: 1,
                scrollbar:{
                  hide: true,
                }
              }
            },
          });

          // TESTIMONIAL SLIDER THREE
          var swiper = new Swiper(".testimonial__slider--three", {
            slidesPerView: 3,
            spaceBetween: 30,
            speed:1000,
            centeredSlides: true,
            loop:true,
            pagination: {
             el: '.swiper-pagination',
             clickable: true,
          },
            breakpoints: {
              1200: {
                slidesPerView: 3,
              },
              900: {
                slidesPerView:3,
              },
              768: {
                slidesPerView: 2,
              },
              580: {
                slidesPerView: 1.5,
              },
              0: {
                slidesPerView: 1,
              }
            },
          }); 
          // TESTIMONIAL SLIDER FOUR
          var swiper = new Swiper(".testimonial__slider--four", {
            slidesPerView: 1,
            spaceBetween: 0,
            speed:1500,
            loop:true,
            pagination: {
             el: '.swiper-pagination',
             clickable: true,
          },
            navigation: {
              nextEl: ".swiper-btn-next",
              prevEl: ".swiper-btn-prev",
            },
            breakpoints: {
              1200: {
                slidesPerView: 1,
              },
              900: {
                slidesPerView:1,
              },
              768: {
                slidesPerView: 1,
              },
              580: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });

          // CLIENT FEEDBACK SLIDER
          var swiper = new Swiper(".feedback-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
            loop:true,
            pagination: {
             el: '.swiper-pagination',
             clickable: true,
          },
            breakpoints: {
              1200: {
                slidesPerView: 3,
              },
              900: {
                slidesPerView:3,
              },
              768: {
                slidesPerView: 2,
              },
              580: {
                slidesPerView: 1.5,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });

          // HOME FIVE BANNER SLIDER
          var swiper = new Swiper(".banner-slider-active", {
            slidesPerView: 1,
            speed: 1800,
            loop:true,
            navigation: {
              nextEl: ".swiper-btn-next",
              prevEl: ".swiper-btn-prev",
            },
            pagination:{
              el: ".slider-dots",
              clickable: true,
            }
          });

        });

        /*============ accordion style ======== */
        document.addEventListener("DOMContentLoaded", function () {
          var accordionHeaders = document.querySelectorAll(".accordion-header");
          accordionHeaders.forEach(function (header, index) {
            header.addEventListener("click", function () {
              var accordionItems = document.querySelectorAll(".accordion-item");
              accordionItems.forEach(function (item) {
                item.classList.remove("active");
              });
              var clickedItem = document.querySelectorAll(".accordion-item")[index];
              clickedItem.classList.add("active");
            });
          });
        });

      },  
      wowActive: function () {
        new WOW().init();
      },
      salActive: function () {
        sal({
          threshold: 0.1,
          once: true,
          duration: 800,
        });
      },
      videoActivation: function (e) {
        $(document).ready(function(){
          $('.popup-youtube, .popup-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
          });
        });
      },
      preloader:function(){
        window.addEventListener('load',function(){
          document.querySelector('body').classList.add("loaded")  
        });          
      },
      stickySidebar: function (e) {
        // stickySidebar
        if (typeof $.fn.theiaStickySidebar !== "undefined") {
          $(".sticky-coloum-wrap .sticky-coloum-item").theiaStickySidebar({
            additionalMarginTop: 130,
          });
        }
      },

      counterUp: function (e) {
        $('.counter').counterUp({
          delay: 10,
          time: 1000
        });
        $('.counter').addClass('animated fadeInDownBig');
      },


    // AOS ADD ANIMATION
    
    // BACK TO TOP BUTTON JS
      backToTopInit: function () {
        $(document).ready(function(){
        "use strict";
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength / height);
          progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress);	
        var offset = 50;
        var duration = 550;
        jQuery(window).on('scroll', function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
            jQuery('.rts-switcher').addClass('btt__visible');
          } else {
            jQuery('.progress-wrap').removeClass('active-progress');
            jQuery('.rts-switcher').removeClass('btt__visible');
          }
        });				
        jQuery('.progress-wrap').on('click', function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
        
        
      }); 
  
      },
      // sticky header activation
      stickyHeader: function (e) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('header.header-section').addClass('sticky-header')
            } else {
                $('header.header-section').removeClass('sticky-header')
            }
        })
      },  
      
      // svg inject js
      tabActive: function(){
      },
  
  
      // side menu desktop
      sideMenu:function(){
        $(document).on('click', '#menu-btn', function () {
          $("#side-bar").addClass("show");
          $("#anywhere-home").addClass("bgshow");
        });
        $(document).on('click', '.close-icon-menu', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '#anywhere-home', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '.onepage .mainmenu li a', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
      },

      metismenu:function(){
        $('#mobile-menu-active').metisMenu();
      },
      
      // THEME MODE SWITCHER JS
    }
    rtsJs.m(); 


    $(document).ready(function() {
      $('select').niceSelect();
    });

    $(window).on("scroll", function() {
      var ScrollBarPostion = $(window).scrollTop();
      if (ScrollBarPostion > 100) {
        $(".rts-header").addClass("header-sticky");      
      } else {
        $(".rts-header").removeClass("header-sticky");
        $(".rts-header .rts-ht").removeClass("remove-content");     
      }
    });

    $(document).ready(function() {
      // Listen for the collapse show event
      $('.working-process-accordion-one .accordion-collapse').on('show.bs.collapse', function () {
        // Find the parent .accordion-item and add the 'show' class
        $(this).closest('.accordion-item').addClass('show');
      });
    
      // Listen for the collapse hide event
      $('.working-process-accordion-one .accordion-collapse').on('hide.bs.collapse', function () {
        // Find the parent .accordion-item and remove the 'show' class
        $(this).closest('.accordion-item').removeClass('show');
      });
    });
    $(document).ready(function(){
        /*=========== Tab Js ===========*/
        try {
          $(".tab__btn").click(function () {
            const tabId = $(this).data("tab");
            $(".tab__btn").removeClass("active");
            $(this).addClass("active");
            $(".tab__content").removeClass("open").hide();
            $("#" + tabId)
              .addClass("open")
              .show();
          });
          $('.tab__btn[data-tab="tab1"]').click();
        } catch (error) {
          console.error("Tab Button not enable this page", error);
        }

        // PRICING-TABLE-TAB
        try {
          $(".tab__price").click(function () {
            const tabId = $(this).data("tab");
            $(".tab__price").removeClass("active");
            $(this).addClass("active");
            $(".price__content").removeClass("open").hide();
            $("#" + tabId)
              .addClass("open")
              .show();
          });
          $('.tab__price[data-tab="tab1"]').click();
        } catch (error) {
          console.error("Tab Button not enable this page", error);
        }       
        
        // PRICING-TABLE-TAB
        try {
          $(".tab__affiliate").click(function () {
            const tabId = $(this).data("tab");
            $(".tab__affiliate").removeClass("active");
            $(this).addClass("active");
            $(".affiliate__content").removeClass("open").hide();
            $("#" + tabId)
              .addClass("open")
              .show();
          });
          $('.tab__affiliate[data-tab="tab1"]').click();
        } catch (error) {
          console.error("Tab Button not enable this page", error);
        }
    })
    
    // BOOTSTRAP TOOLTIPS
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // PRICING FEATURE SHOW HIDE
    try {
      $(document).ready(function () {
        $(".card-plan__feature--list-trigered").click(function () {
          $('.card-plan__feature--list-trigered').toggleClass('active').animate(100);
          $(".card-plan__feature--list.more__feature").slideToggle();
          $(".card-plan__feature--list.more__feature").css({
            display: "flex",
            marginTop: "25px"
          });
        });
      });
    } catch (error) {
      console.log('Feature show hide js code not working this page')
    }
    
   // THEME MODE SWITCHER JS
    try {
      var rts_light = $('.rts-dark-light');
      if (rts_light.length) {
        var toggle = document.getElementById("rts-data-toggle");
        var storedTheme = localStorage.getItem('fluxi-theme') || (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
        if (storedTheme)
          document.documentElement.setAttribute('data-theme', storedTheme)
        toggle.onclick = function () {
          var currentTheme = document.documentElement.getAttribute("data-theme");
          var targetTheme = "light";

          if (currentTheme === "light") {
            targetTheme = "dark";
          }
          document.documentElement.setAttribute('data-theme', targetTheme)
          localStorage.setItem('fluxi-theme', targetTheme);
        };
      }
    } catch (error) {
      console.log('Dark Mode Not Working This page.');
    }
    
    //Mobile Menu
        $(".mobile-menu-toggle").on("click", function () {
            $(".body-overlay").addClass('overlay-on');
            $(".mobile-menu").addClass("active");
        });
        $(".close-menu").on("click", function () {
            $(".mobile-menu").removeClass("active");
            $(".body-overlay").removeClass("overlay-on");
        });
        $(".body-overlay").on("click", function () {
            $(".mobile-menu").removeClass("active");
            $(this).removeClass("overlay-on");
        });
        $(".mobile-menu ul li.menu-item > i").each(function () {
            $(this).on("click", function () {
                $(this).siblings('ul').slideToggle();
                $(this).toggleClass("icon-rotate");
            });
        });
        
        //Canvus Menu
        $(".ofcanvus-btn").on("click", function () {
            $(".ofcanvus-menu").addClass("active");
            return false;
        });
        $(".close-canvus").on("click", function () {
            $(".ofcanvus-menu").removeClass("active");
            return false;
        });
        
        // Hide ofcanvus when click outside it.
        $(document).on("mouseup", function (e) {
            const ofcanvusMenu = $(".ofcanvus-menu");

            if (!ofcanvusMenu.is(e.target) && ofcanvusMenu.has(e.target).length === 0) {
                ofcanvusMenu.removeClass("active");
            }
        });
        
        
        // (#faqs-category)
          $('#faqs-category .item').on('click', function() {
        
            $(this).addClass('active').siblings().removeClass('active');
        
            const data = $(this).data('category');
        
            // hide all boxes then show one that clicked
            $('#faqs .box').hide();
            $('#faqs .box.category-' + data).show();
        
          });
        
          // (#faqs .q)
          $('#faqs .q .q-h').on('click', function() {
            $(this).parent().toggleClass('open').siblings().removeClass('open');
            if ($(this).parent().hasClass('open')) {
              $(this).parent().find('.q-b').slideDown();
              $(this).parent().siblings().find('.q-b').slideUp();
            } else {
              $(this).parent().find('.q-b').slideUp();
            }
          });
          
          $('#ds-images .tablist .esky-tab').on('click', function() {
            $('#ds-images .tablist .esky-tab').removeClass('esky-active-tab');
            $('#ds-images .tabs .tab-contents').hide();
            
            var current_tab_imdex = $(this).attr('tabindex');
            $(this).addClass('esky-active-tab');
            $('#ds-images .tabs #esky-tabs-5fagdhp71r-panel-'+current_tab_imdex).show();
          });
          
          $('.ds-second-sec .filter-bar .filter-toggle-btn').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    var btnVal = $(this).attr('data-for');
    $('.plans-container').hide();
    $('.plans-container.filter-' + btnVal + '').show();
  });
  
   $('#switch-toggle-tab li .slider').on('click', function () {
    var active_slider = $(this).parent().hasClass("on");
    if(active_slider){
        $(this).parent().removeClass('on');
        $(this).parent().addClass('off');
        $('#switch-toggle-tab li.month').removeClass('active');
        $('#switch-toggle-tab li.year').addClass('active');
        $('#month').hide();
        $('#year').show();
    }else{
        $('#switch-toggle-tab li.year').removeClass('active');
        $('#switch-toggle-tab li.month').addClass('active');
        $(this).parent().removeClass('off');
        $(this).parent().addClass('on');
        $('#year').hide();
        $('#month').show();
    }
  });
           $('#accordion-475-1 .faq-item').on('click', function () {
            console.log($(this).attr("aria-expanded"));
            if($(this).attr("aria-expanded") == 'true'){
                $('#accordion-475-1 .faq-item').attr('aria-expanded','false');
                $('#accordion-475-1 .faq-item .panel-collapse').removeClass('show');
                $(this).addClass('collapsed');
                $(this).children(".panel-collapse").removeClass('show');
                $(this).attr('aria-expanded','false');
            }else{
                $('#accordion-475-1 .faq-item').attr('aria-expanded','false');
            $('#accordion-475-1 .faq-item .panel-collapse').removeClass('show');
                 $(this).removeClass('collapsed');
                $(this).children(".panel-collapse").addClass('show');
                 $(this).attr('aria-expanded','true');
            }
            
          });
          
         var vpsPriceInfo = [{
        "vpsPlan": 1,
        "vpsCore": 1,
        "vpsMemory": 2,
        "vpsStorage": 10,
        "vpsBandwidth": 1000,
        "vpsPrice": 20,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=12"
      }, {
        "vpsPlan": 2,
        "vpsCore": 2,
        "vpsMemory": 4,
        "vpsStorage": 20,
        "vpsBandwidth": 2000,
        "vpsPrice": 40,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=13"
      }, {
        "vpsPlan": 3,
        "vpsCore": 3,
        "vpsMemory": 6,
        "vpsStorage": 30,
        "vpsBandwidth": 3000,
        "vpsPrice": 60,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=14"
      }, {
        "vpsPlan": 4,
        "vpsCore": 4,
        "vpsMemory": 8,
        "vpsStorage": 40,
        "vpsBandwidth": 4000,
        "vpsPrice": 80,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=13"
      }, {
        "vpsPlan": 5,
        "vpsCore": 5,
        "vpsMemory": 10,
        "vpsStorage": 50,
        "vpsBandwidth": 5000,
        "vpsPrice": 100,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=12"
      }, {
        "vpsPlan": 6,
        "vpsCore": 6,
        "vpsMemory": 12,
        "vpsStorage": 60,
        "vpsBandwidth": 6000,
        "vpsPrice": 120,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=13"
      }, {
        "vpsPlan": 7,
        "vpsCore": 7,
        "vpsMemory": 14,
        "vpsStorage": 70,
        "vpsBandwidth": 7000,
        "vpsPrice": 140,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=14"
      }, {
        "vpsPlan": 8,
        "vpsCore": 8,
        "vpsMemory": 16,
        "vpsStorage": 80,
        "vpsBandwidth": 8000,
        "vpsPrice": 160,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=12"
      }, {
        "vpsPlan": 9,
        "vpsCore": 9,
        "vpsMemory": 18,
        "vpsStorage": 90,
        "vpsBandwidth": 9000,
        "vpsPrice": 180,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=13"
      }, {
        "vpsPlan": 10,
        "vpsCore": 10,
        "vpsMemory": 20,
        "vpsStorage": 100,
        "vpsBandwidth": 10000,
        "vpsPrice": 200,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=14"
      }, {
        "vpsPlan": 11,
        "vpsCore": 11,
        "vpsMemory": 22,
        "vpsStorage": 110,
        "vpsBandwidth": 11000,
        "vpsPrice": 220,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=12"
      }, {
        "vpsPlan": 12,
        "vpsCore": 12,
        "vpsMemory": 24,
        "vpsStorage": 120,
        "vpsBandwidth": 12000,
        "vpsPrice": 240,
        "vpsWHmcsUrl": "https://whmcs.themetags.com/cart.php?a=add&pid=13"
      }];
      var cPlan = $('#c-plan');
    
      if (cPlan.length) {
        cPlan.bootstrapSlider({
          tooltip: 'always'
        });
        cPlan.on("slide", function (e) {
          $.each(vpsPriceInfo, function (index, vpsObj) {
            if (vpsObj.vpsPlan == e.value) {
              setVpsValue(vpsObj);
            }
          });
        });
        initSlider();
      }
    
      function initSlider() {
        cPlan.value = cPlan.data("slider-value");
        var defaultVpsCore = parseInt(cPlan.value);
        $.each(vpsPriceInfo, function (index, vpsObj) {
          if (vpsObj.vpsPlan == defaultVpsCore) {
            $('.slider .tooltip', '#custom-plan').append('<div class="tooltip-up"></div>');
            $('.slider .tooltip-inner', '#custom-plan').attr("data-unit", cPlan.data("unit"));
            $('.slider .tooltip-up', '#custom-plan').attr("data-currency", cPlan.data("currency"));
            setVpsValue(vpsObj);
          }
        });
      }
    
      function setVpsValue(vpsObj) {
        $('.slider .tooltip-up', '#custom-plan').text(vpsObj.vpsPrice);
        $('.vpsPrice', '#custom-plan').text(cPlan.data("currency") + vpsObj.vpsPrice);
        $('.vpsCore span', '#custom-plan').text(vpsObj.vpsCore);
        $('.vpsMemory span', '#custom-plan').text(vpsObj.vpsMemory);
        $('.vpsStorage span', '#custom-plan').text(vpsObj.vpsStorage);
        $('.vpsBandwidth span', '#custom-plan').text(vpsObj.vpsBandwidth);
        $('.vpsWHmcsUrl', '#custom-plan').attr("href", vpsObj.vpsWHmcsUrl);
      } 
      
      function formatDate(date){
        var dd = date.getDate();
        var mm = date.getMonth()+1;
        var yyyy = date.getFullYear();
        const month = date.toLocaleString('default', { month: 'long' });
        if(dd<10) {dd='0'+dd}
        if(mm<10) {mm='0'+mm}
        date = dd+'th '+month+' '+yyyy;
        return date
     }
    
    
    
    function Last7Days () {
        var result = [];
        for (var i=0; i<7; i++) {
            var list_view = '<div class="timeline"><div class="content-wrapper"><div class="panel panel-message"><div class="panel-body"><div class="incident-empty-wrapper">';
            var d = new Date();
            d.setDate(d.getDate() - i);
            list_view += '<h4 class="incident-date">'+formatDate(d)+'</h4>';
            list_view += '<p>No incidents reported</p></div></div></div></div></div>';
            result.push( list_view );
            
        }
    
        return(result.join(''));
     }
     
     
        $( window ).on( "load", function() {
           $('#section-timeline').html(Last7Days());
        //console.log( Last7Days() );
    });
    
    $.expr[':'].textEquals = $.expr.createPseudo(function(arg) {
    return function(elem) {
        return $(elem).text().match("^" + arg + "$");
    };
});
var dataLocation = [
    ["https://seattle-ip.ultahost.com", "seattle"],
    ["https://dallas-ip.ultahost.com", "dallas"],
    ["https://losangeles-ip.ultahost.com", "losangeles"],
    ["https://newyork-ip.ultahost.com", "newyork"],
    ["https://toronto-ip.ultahost.com", "canada"],
    ["https://frankfurt-ip.ultahost.com", "germany"],
    ["https://london-ip.ultahost.com", "london"],
    ["https://istanbul-ip.ultahost.com", "turkey"],
    ["https://mumbai-ip.ultahost.com", "india"],
    ["https://johannesburg-ip.ultahost.com", "johannesburg"],
    ["https://tokyo-ip.ultahost.com", "tokyo"],
    ["https://saopaulo-ip.ultahost.com", "saopaulo"],
    ["https://mexico-ip.ultahost.com", "mexico"],
    ["https://helsinki-ip.ultahost.com", "helsinki"],
    ["https://singapore-ip.ultahost.com", "singapore"]
];
var Ping = function(a) {
    this.opt = a || {}, this.favicon = this.opt.favicon || "/favicon.ico", this.timeout = this.opt.timeout || 0, this.logError = this.opt.logError || !1
};
Ping.prototype.ping = function(a, b) {
    function c(a) {
        f.wasSuccess = !0, e.call(f, a)
    }

    function d(a) {
        f.wasSuccess = !1, e.call(f, a)
    }

    function e() {
        g && clearTimeout(g);
        var a = new Date - h;
        if ("function" == typeof b) return this.wasSuccess ? b(null, a) : (f.logError && console.error("error loading resource"), b("error", a))
    }
    var f = this;
    f.wasSuccess = !1, f.img = new Image, f.img.onload = c, f.img.onerror = d;
    var g, h = new Date;
    f.timeout && (g = setTimeout(function() {
        e.call(f, void 0)
    }, f.timeout)), f.img.src = a + f.favicon + "?" + +new Date
}, "undefined" != typeof exports ? "undefined" != typeof module && module.exports && (module.exports = Ping) : window.Ping = Ping;
$(document).ready(function() {
    var p = new Ping({
        favicon: "?t"
    });
    var timesRan = 0;

    function complexFunction() {
        var minElapsedTime = Infinity;
        var fastestElement = null;
        var useColor = '';
        dataLocation.forEach(function(item, key) {
            p.ping(item[0], function(err, elapsedTime) {
                 useColor = "#ed582f";
                if (elapsedTime >= 200 && elapsedTime < 300) {
                    useColor = "#ed582f";
                } else if (elapsedTime >= 100 && elapsedTime <= 200) {
                    useColor = "#e0ce2f";
                } else if (elapsedTime < 100) {
                    useColor = "#65ce6c";
                } else {
                    useColor = "#ff2323";
                }
                $("#" + item[1]).find('span').text(elapsedTime + 'ms').css("color", useColor);
                if (elapsedTime < minElapsedTime) {
                    minElapsedTime = elapsedTime;
                    fastestElement = $("#" + item[1]);
                }
            });
        });
        timesRan = Number(timesRan) + 1;
        setTimeout(function() {
            if (fastestElement) {
                $('.dataServer-div').removeClass('fastest');
                fastestElement.parents('.dataServer-div').addClass('fastest');
            }
            if (timesRan < 6) {
                complexFunction()
            }
        }, 2000);
    }
    complexFunction();
})

var testimonialsSwiper = new Swiper(".testimonials-slider .swiper", {
  loop: true,
  a11y: {
    enabled: false
  },
  pagination: {
    el: ".testimonials-slider .swiper-pagination",
    clickable: true
  },
  navigation: {
    nextEl: ".testimonials-section .swiper-btn-next",
    prevEl: ".testimonials-section .swiper-btn-prev"
  },
  breakpoints: {
    0: {
      slidesPerView: 1.05,
      spaceBetween: 7,
      centeredSlides: true
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 10,
      centeredSlides: false
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    1199: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  },
});
        
   
  })(jQuery, window)  