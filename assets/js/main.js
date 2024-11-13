

jQuery(document).ready(function($) {
  
  setTimeout(function() { 
    localStorage.setItem('preloader', 'false');
  }, 1801);

  if(localStorage.getItem("preloader") == 'false') {
    $('.preloader').hide();
  }
  
  window.onload = function () {
    window.scrollTo(0, 0);
  };

  // Image.svg to svg code
  jQuery('.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Replace image with new SVG
      $img.replaceWith($svg);

    }, 'xml');
  });

  var lastScrollTop = 0;
  var wHeight = $( window ).height() * 0.68;
  var reverseWHeight = $( window ).height() - wHeight;

  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if(st > 400) {
      if (st > lastScrollTop){
        $('.header').addClass('hide');
        $('.default-anchor').removeClass('top');
      } else {
        $('.header').removeClass('hide');
        $('.default-anchor').addClass('top');
      }
      lastScrollTop = st;
    }

    if($('.hero').length) {
      var elementHeight = $(this).height();
      $('.hero').css({
        opacity: function() {
          return (elementHeight - st) / elementHeight;
        }
      });
      // var translate = (elementHeight - st) / elementHeight;
      // $('.hero').css({transform: 'translateY(-' + translate +'%)'});
    }

    // if($('.banner').length) {
    //   var elementTop = $('.banner').offset().top;

    //   if(st + wHeight > elementTop) {
    //     $('.banner-bgafter').css({
    //       opacity: function() {
    //         var newST = st - elementTop - reverseWHeight + 300;
    //         var elementHeight = $('.banner').height();
    //         return (elementHeight + newST) / elementHeight;
    //       }
    //     });
    //   }
    // }

    if($('.minuses').length) {
      $( ".minuses-list-item:not(:first-child)" ).each(function( index ) {
        if(st + wHeight > $(this).offset().top) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    }

    if($('.wiki-title').length) {
      var elementHeight = $(this).height();
      var translate = (elementHeight - st) / elementHeight;
      if(translate < 0.193168) {
        translate = 0.193;
      }
      if(window.matchMedia('(max-width: 1400px)').matches){
        if(translate < 0.3) {
          translate = 0.3;
        }
      }
      if(window.matchMedia('(max-width: 768px)').matches){
        if(translate < 0.55) {
          translate = 0.55;
        }
      }
      $('.wiki-title').css({transform: 'scale(' + translate +')'});
    }

    if($('.wiki-logo').length) {
      var elementTop = $('.wiki').offset().top;

      if(st + wHeight > elementTop) {
        $('.wiki-logo').css({
          opacity: function() {
            var elementHeight = $('.wiki').height() / 2;
            return (elementHeight - st) / elementHeight;
          }
        });
      }
    }

    if($('.default-nav').length) {
      if(st + $( window ).height() > $('.default').offset().top + $('.default').outerHeight()) {
        $('.default-nav').addClass('stop');
      } else {
        $('.default-nav').removeClass('stop');
      }

      $(".default-content-item-head").each(function () {

        if (st > $(this).offset().top - 97) {
          var blockId = $(this).attr("id");
          $(".default-nav-item").removeClass("active");
          $(".default-anchor-item").removeClass("active");
          $('.default-nav-item[href^="#' + blockId + '"]').addClass("active");
          $('[data-anchor^="' + blockId + '"]').addClass("active");
        }
      });

      $(".anchor-block").each(function () {
        if (st > $(this).offset().top - 97) {
          var blockId = $(this).attr("id");
          $(".default-anchor-item-list a").removeClass("active");
          $('.default-anchor-item-list a[href^="#' + blockId + '"]').addClass("active");
        }
      });

      if(st < $('.default-content').offset().top - 96) {
        $(".default-nav-item").removeClass("active");
      }
    }

    if($('.default_single').length) {
      st = st + ($( window ).height()*0.5);
      var c = $('.lines-top').offset().top,
      d = $('.lines-top').height(),
      scrollPercent = ((st-c) / (d)) * 100;
      $('.lines-top .line-current').css('height', scrollPercent + '%');

      if(st > c) {
        var c2 = $('.lines-mid').offset().top,
        d2 = $('.lines-mid').height(),
        scrollPercent = ((st-c2) / (d2)) * 100;
        $('.lines-mid .line-current').css('height', scrollPercent + '%');
      }

      if(st > c2) {
        var c3 = $('.lines-bot').offset().top,
        d3 = $('.lines-bot').height(),
        scrollPercent = ((st-c3) / (d3 / 2)) * 100;
        $('.lines-bot .line-current').css('height', scrollPercent + '%');
      }
      
    }
  });


  if(window.matchMedia('(max-width: 768px)').matches){
    $('.features').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
    $('.features').find('.primary-btn').addClass('body-12mu').removeClass('body-14mu');
    $('.faq').find('.body-18mp').addClass('body-16mp').removeClass('body-18mp');
    $('.faq').find('.h3').addClass('h5').removeClass('h3');
    $('.minuses').find('.h4').addClass('h5').removeClass('h4');
    $('.files').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
    $('.wiki').find('.body-18mp').addClass('body-16mp').removeClass('body-18mp');
    $('.s404').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
    $('.form').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
    $('.info').find('.body-18mp').addClass('body-16rp').removeClass('body-18mp');
    $('.default-wrap').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
    $('.default-wrap').find('.body-18bp').addClass('body-16bp').removeClass('body-18bp');
    $('.input-file').find('.body-16rp').addClass('body-14rp').removeClass('body-16rp');
  }
  if(window.matchMedia('(max-width: 1400px)').matches){
    $('.footer').find('.body-14m').addClass('body-12m').removeClass('body-14m');
  }
  $(window).on('resize', function() {
    if(window.matchMedia('(max-width: 768px)').matches){
      $('.features').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
      $('.features').find('.primary-btn').addClass('body-12mu').removeClass('body-14mu');
      $('.faq').find('.body-18mp').addClass('body-16mp').removeClass('body-18mp');
      $('.faq').find('.h3').addClass('h5').removeClass('h3');
      $('.minuses').find('.h4').addClass('h5').removeClass('h4');
      $('.files').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
      $('.wiki').find('.body-18mp').addClass('body-16mp').removeClass('body-18mp');
      $('.s404').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
      $('.form').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
      $('.info').find('.body-18mp').addClass('body-16rp').removeClass('body-18mp');
      $('.default-wrap').find('.body-18rp').addClass('body-16rp').removeClass('body-18rp');
      $('.default-wrap').find('.body-18bp').addClass('body-16bp').removeClass('body-18bp');
      $('.input-file').find('.body-16rp').addClass('body-14rp').removeClass('body-16rp');
    }
    if(window.matchMedia('(max-width: 1400px)').matches){
      $('.footer').find('.body-14m').addClass('body-12m').removeClass('body-14m');
    }
  });


  $('.faq-content-item').not('.active').hide();
  $(document).on("click", ".faq-nav-item:not(.active)", function () {
    $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest(".faq")
        .find(".faq-content-item")
        .hide()
        .eq($(this).index())
        .fadeIn();
  });

  $('.news-tab-item').not('.active').hide();
  $(document).on("click", ".news-nav-item:not(.active)", function () {
    $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest(".news")
        .find(".news-tab-item")
        .hide()
        .eq($(this).index())
        .fadeIn();
  });

  if($('.ice').length) {
    document.addEventListener("mousemove", parallax);
    function parallax(event) {
      this.querySelectorAll(".ice").forEach((shift) => {
        const position = shift.getAttribute("value");
        const x = (window.innerWidth - event.pageX * position) / 90;
        const y = (window.innerHeight - event.pageY * position) / 90;
  
        shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
      });
    }
  }

  if($('.wiki-logo').length) {
    document.addEventListener("mousemove", parallax);
    function parallax(event) {
      this.querySelectorAll(".wiki-logo").forEach((shift) => {
        const position = shift.getAttribute("value");
        const x = (window.innerWidth - event.pageX * position) / 90;
        const y = (window.innerHeight - event.pageY * position) / 90;
  
        shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
      });
    }
  }

  $(".menu-btn").on('click', function () {
    $('#menuModal').arcticmodal();
  });

  $(".stories-item").on('click', function () {
    $('#storiesModal').arcticmodal({
      beforeClose: function(data, el) {
        $('.stories-swiper-slide video').trigger('pause');
      },
    });
  });
  
  $(".steps-btn").on('click', function () {
    $('#stepsModal').arcticmodal();
  });

  $(".create-btn").on('click', function () {
    $('#createModal').arcticmodal();
  });

  $(".aut-btn").on('click', function () {
    $('#autModal').arcticmodal();
  });

  $(".change-btn").on('click', function () {
    let login = $(this).data('login');
    $('input[name=changePassword]').val(login);
    $('#changeModal').arcticmodal();
  });

  $(".pay-btn").on('click', function () {
    $('#payModal').arcticmodal();
  });

  $(".promo-btn").on('click', function () {
    $('#promoModal').arcticmodal();
  });

  $('#payModal .main-btn').on('click', function () {
    $('#payModal').arcticmodal('close');
    $('#paySucModal').arcticmodal();
  });

  $('.payment-btn').on('click', function () {
    $('#paymentSucModal').arcticmodal();
  });

  $('.chat-add').on('click', function () {
    $('#chatModal').arcticmodal();
  });

  $('#promoModal .main-btn').on('click', function () {
    $('#promoModal').arcticmodal('close');
    $('#promoSucModal').arcticmodal();
  });

  $(".item-btn").on('click', function () {
    $('#sendModal').arcticmodal();
  });
  

  $('#sendModal .main-btn').on('click', function () {
    $('#sendModal').arcticmodal('close');
    $('#sendSucModal').arcticmodal();
  });

  $(".banner").on('mousedown', function () {
    $('.banner-bgafter').addClass('active');
  });
  $(".banner").on('mouseup', function () {
    $('.banner-bgafter').removeClass('active');
  });

  $(".parrent-item").on('click', function () {
    $(this).toggleClass('closed');
    $(this).siblings('.sub-menu').toggle(400);
  });

  $('.account').addClass('open');
  $(".menu-account-btn").on('click', function () {
    $(this).toggleClass('active');
    $('.account').toggleClass('open');
    $('.account-nav').toggleClass('hide');
    $('.account-nav').toggleClass('open');
    $(".parrent-item").addClass('closed');
    $('.sub-menu').hide(400);
  });

  $(".footer-mid-partners-item").hover(
    function() {
      $(this).removeClass('hover');
    }, function() {
      $(this).addClass('hover');
    }
  );

  new WOW({
    // mobile: false,
  }).init();


  var storiesSwiper = new Swiper('.stories-swiper', {
    pagination: {
      el: '.swiper-pagination',
    },
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    watchSlidesProgress: true,
    slidesPerView: 'auto',
    updateOnWindowResize: true,
    spaceBetween: 0,
    allowTouchMove: true,
    initialSlide: 1,
    centeredSlides: true,
    centeredSlidesBounds: true,
    on: {
      click() {
        storiesSwiper.slideTo(this.clickedIndex);    
      },
    },
    breakpoints: {
      991: {
        allowTouchMove: false,
      },
    }
  });

  storiesSwiper.on('slideChangeTransitionEnd', function(){
    $('.stories-swiper-slide video').trigger('pause');
    $("video").one("pause", function() {
      this.currentTime = 0;
      this.volume = 0.7;
    }); 
    $('.stories-swiper-slide').eq(storiesSwiper.activeIndex).find('video').trigger('play');
  });

  $(".stories-item").on('click', function () {
    storiesSwiper.slideTo($(this).index());
    $('.stories-swiper-slide video').trigger('pause');
    $("video").one("pause", function() {
      this.currentTime = 0;
      this.volume = 0.7;
    }); 
    $('.stories-swiper-slide').eq(storiesSwiper.activeIndex).find('video').trigger('play');
  });


  /*
   ** Anchor scroll
   */
   $('a[href^="#"]').click(function(){

    var scroll_el = $(this).attr('href');
    if ($(scroll_el).length != 0) {
      var space = 96;
      if(window.matchMedia('(max-width: 768px)').matches){
        space = 36;
      }
      $('html, body').animate({ scrollTop: $(scroll_el).offset().top - space}, 900); 
    }
    return false;
  });

  
  var titles = new Array();
  $('.posts-swiper-item').each(function () {
    var title = $(this).find('p').text();
    titles.push(title);
  });
  var tClass = "h7 ";
  if(window.matchMedia('(max-width: 1400px)').matches){
    tClass = "h8 ";
  }
  var postSwiper = new Swiper('.posts-swiper', {
    slidesPerView: 'auto',
    spaceBetween: 48,
    direction: 'vertical',
    centeredSlides: true,
    loop: true,
    allowTouchMove: false,
    mousewheel: {
      releaseOnEdges: true,
    },
    pagination: {
      el: '.posts-swiper .swiper-pagination',
			clickable: true,
        renderBullet: function (index, className) {
          return '<div class="'+ tClass + className + '">' + (titles[index]) + '</div>';
        },
    },
    breakpoints: {
      1400: {
        spaceBetween: 128,
      }
    }
  });


  $(document).on('click', '.plus, .minus', function () {
		var qty = $(this).closest('.number-wrap');
		var val = parseFloat(qty.find('input').val());
		var max = parseFloat(qty.find('input').attr('max'));
		var min = parseFloat(qty.find('input').attr('min'));
		var step = 1;

      if ($(this).is('.plus')) {
        if (max && max <= val) {
          qty.find('input').val(max);
        } else {
          qty.find('input').val(val + step);
        }
      } 
      
      if ($(this).is('.minus')) {
        if (min && min >= val) {
          qty.find('input').val(min);
        } else if (val > min) {
          qty.find('input').val(val - step);
        }
      }

      qty.find('input').trigger('change');
	});

  $('.number-wrap input').on('change', function () {
		var val = parseFloat($(this).val());
		var max = parseFloat($(this).attr('max'));
		var min = parseFloat($(this).attr('min'));

    if(val >= max) {
      $(this).val(max);
    }

    if(val <= min) {
      $(this).val(min);
    }
	});


  $('.profile-tab-item').not('.active').hide();
  $(document).on("click", ".profile-nav-item:not(.active)", function () {
    $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest(".account")
        .find(".profile-tab-item")
        .hide()
        .eq($(this).index())
        .fadeIn();
  });

  $(document).on("click", ".payments-list-item:not(.active)", function () {
    $(this)
        .addClass("active")
        .siblings()
        .removeClass("active");
  });

  $('#chatModal .input-file input[type=file]').on('change', function(){
    let file = this.files[0];
    $('.file-btn-text').text(file.name);
  });

  $('.account-chat-right-tab').not('.active').hide();
  $(document).on("click", ".account-chat-list-item:not(.active)", function () {
    $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest(".account-chat")
        .find(".account-chat-right-tab")
        .hide().removeClass('active')
        .eq($(this).index())
        .fadeIn().addClass('active');
  });

  $(document).on("click", ".back-chat", function () {
    $('.account-chat-list-item').removeClass('active');
    $(".account-chat-right-tab").hide().removeClass('active');
  });

  $(document).on("click", ".user", function () {
    $('.user-modal').toggleClass('active');
  });

  $(document).on("click", ".back-chat", function () {
    $('.account-chat-list-item').removeClass('active');
    $(".account-chat-right-tab").hide().removeClass('active');
  });

  $(document).click(function(event) {
    if (!$(event.target).is(".user")) {
      $('.user-modal').removeClass('active');
    }
  });

  $('.payments-list_col').find('.payments-list-item').hide();
  $('.pay-title').hide();
  $('.payments-list_filter .payments-list-item').on( 'click', function() {
      var filterValue = $(this).attr('data-filter');
      var titleValue = $(this).attr('data-title');
      $('.pay-title').text(titleValue);
      $('.pay-title').fadeIn();
      $('.payments-list_col').find('.payments-list-item').removeClass('show active');
      $('.payments-list_col').find(filterValue).addClass('show');
  });

  let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);


if($('.banner').length) {
  const rippleSettings = {
    maxSize: 100,
    animationSpeed: 5,
    strokeColor: [148, 217, 255],
  };
  
  const canvasSettings = {
    blur: 8,
    ratio: 1,
  };
  
  function Coords(x, y) {
    this.x = x || null;
    this.y = y || null;
  }
  
  const Ripple = function Ripple(x, y, circleSize, ctx) {
    this.position = new Coords(x, y);
    this.circleSize = circleSize;
    this.maxSize = rippleSettings.maxSize;
    this.opacity = 1;
    this.ctx = ctx;
    this.strokeColor = `rgba(${Math.floor(rippleSettings.strokeColor[0])},
      ${Math.floor(rippleSettings.strokeColor[1])},
      ${Math.floor(rippleSettings.strokeColor[2])},
      ${this.opacity})`;
  
    this.animationSpeed = rippleSettings.animationSpeed;
    this.opacityStep = (this.animationSpeed / (this.maxSize - circleSize)) / 2;
  };
  
  Ripple.prototype = {
    update: function update() {
      this.circleSize = this.circleSize + this.animationSpeed;
      this.opacity = this.opacity - this.opacityStep;
      this.strokeColor = `rgba(${Math.floor(rippleSettings.strokeColor[0])},
        ${Math.floor(rippleSettings.strokeColor[1])},
        ${Math.floor(rippleSettings.strokeColor[2])},
        ${this.opacity})`;
    },
    draw: function draw() {
      this.ctx.beginPath();
      this.ctx.strokeStyle = this.strokeColor;
      this.ctx.arc(this.position.x, this.position.y, this.circleSize, 0,
        2 * Math.PI);
      this.ctx.stroke();
    },
    setStatus: function setStatus(status) {
      this.status = status;
    },
  };
  
  const canvas = document.querySelector('#canvas');
  const ctx = canvas.getContext('2d');
  const ripples = [];
  
  const height = $('.banner').outerHeight()*2;
  const width = document.body.clientWidth;
  
  const rippleStartStatus = 'start';
  
  const isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
  
  canvas.style.filter = `blur(${canvasSettings.blur}px)`;
  
  canvas.width = width * canvasSettings.ratio;
  canvas.height = height * canvasSettings.ratio;
  
  canvas.style.width = `${width}px`;
  canvas.style.height = `${height}px`;
  
  let animationFrame;
  
  // Add GUI settings
  // const addGuiSettings = () => {
  //   const gui = new dat.GUI();
  //   gui.add(rippleSettings, 'maxSize', 0, 1000).step(1);
  //   gui.add(rippleSettings, 'animationSpeed', 1, 30).step(1);
  //   gui.addColor(rippleSettings, 'strokeColor');
  
  //   const blur = gui.add(canvasSettings, 'blur', 0, 20).step(1);
  //   blur.onChange((value) => {
  //     canvas.style.filter = `blur(${value}px)`;
  //   });
  // };
  
  // addGuiSettings();
  
  // Function which is executed on mouse hover on canvas
  const canvasMouseOver = (e) => {
    const x = e.clientX * canvasSettings.ratio;
    const y = e.clientY * canvasSettings.ratio;
    ripples.unshift(new Ripple(x, y, 2, ctx));
  };
  
  const animation = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  
    const length = ripples.length;
    for (let i = length - 1; i >= 0; i -= 1) {
      const r = ripples[i];
  
      r.update();
      r.draw();
  
      if (r.opacity <= 0) {
        ripples[i] = null;
        delete ripples[i];
        ripples.pop();
      }
    }
    animationFrame = window.requestAnimationFrame(animation);
  };
  
  animation();
  canvas.addEventListener('mousemove', canvasMouseOver);
}


  function generatePrefix(length = 2) {
    const possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let prefix = "";

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * possible.length);
        prefix += possible.charAt(randomIndex);
    }

    return prefix;
  }

  $('#prefix').val(generatePrefix());

  $('.prefix-btn').on('click', function (event) {
    event.preventDefault();
    const prefix = generatePrefix();
    $('#prefix').val(prefix);
  });

  

  $(".pass-btn").on('click', function () {
    let passInput = $(this).parent().find('input');
    $(this).toggleClass('active');
    if (passInput.attr('type') == "password") {
      passInput.attr('type', 'text');
    } else {
      passInput.attr('type', 'password');
    }
  });

});
