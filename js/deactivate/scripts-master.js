jQuery(document).ready(function ($) {
  /* Menu mobile
  -------------------------------------------------------*/
  //Disabilito i link per le voci con un sub menu
  $('.menu-item-has-children > a, .search-menu-icon').click(function (e) {
    e.preventDefault()
  })

  //Open slide menu
  var $toggle = $('.toggle')
  var $menu = $('.nav-container')
  //slide menu
  $toggle.click(function () {
    $menu.toggleClass('open')
    $toggle.toggleClass('open')
  })

  //Accordion Menu mobile
  $('.main-menu > .menu-item-has-children > a').click(function (e) {
    if ($(window).width() < 991) {
      $('.main-menu .sub-menu').slideUp(),
        $(this).next().is(':visible') || $(this).next().slideDown(),
        e.stopPropagation()
    } else {
      return
    }
  })

  //Accordion Sub Sub Menu mobile
  $(
    '.main-menu > .menu-item-has-children .sub-menu .menu-item-has-children > a',
  ).click(function (e) {
    if ($(window).width() < 991) {
      $('.main-menu .sub-menu .sub-menu').slideUp(),
        $(this).next().is(':visible') || $(this).next().slideDown(),
        e.stopPropagation()
    } else {
      return
    }
  })

  //Resize chiudo il menù al resize
  $(window).resize(function () {
    if ($(window).width() > 991) {
      $('.main-menu li').children().removeAttr('style')
      $menu.removeClass('open')
      $toggle.removeClass('open')
    }
  })

  /* Scroll
  -------------------------------------------------------*/
  $(window).scroll(function () {
    var $scrollPos = $(this).scrollTop()
    var $topBar = $('.top-bar').outerHeight()
    var $adminBar = $('#wpadminbar').outerHeight()

    if ($scrollPos >= 20) {
      $('.main-header')
        .css({
          top: -$topBar + $adminBar,
        })
        .addClass('scroll')
      $('.navigator').addClass('scroll')
    } else {
      $('.main-header')
        .css({
          top: 0 + $adminBar,
        })
        .removeClass('scroll')
      $('.navigator').removeClass('scroll')
    }
  })

  /* form cerca
  -------------------------------------------------------*/
  var $mainSearch = $('.search-menu-icon'),
    $iconSearch = $('.search-menu-icon i'),
    $formCerca = $('.search-form-container')

  $mainSearch.click(function (e) {
    e.preventDefault()
    $formCerca.fadeToggle(150)
    $iconSearch.toggleClass('icon-cancel-1')
    $(this).toggleClass('active')
    $('.search-form-container .search-form input').focus()
  })

  /* Slide Bootstrap
  -------------------------------------------------------*/
  // $('.carousel_home').carousel({
  //   interval: false
  // });

  /* Slider Touch Support */
  // $(".carousel").swiperight(function() {
  // 	 $(this).carousel('prev');
  // });
  //
  // $(".carousel").swipeleft(function() {
  // 	$(this).carousel('next');
  // });

  /* Magnific-popup gallery
  -------------------------------------------------------*/
  $('.gallery, .wp-block-gallery').each(function () {
    // the containers for all your galleries
    $(this).magnificPopup({
      delegate: 'a', // the selector for gallery item
      mainClass: 'mfp-with-zoom',
      type: 'image',
      removalDelay: 500,
      gallery: {
        enabled: true,
      },
      zoom: {
        enabled: true,
        duration: 300,
        opener: function (element) {
          return element.find('img')
        },
      },
    })
  })

  /* Magnific-popup single image with zoom
  -------------------------------------------------------*/
  $('.open-in').parent('a').addClass('magnific-open')

  $('.magnific-open').magnificPopup({
    type: 'image',
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below

    zoom: {
      enabled: true, // By default it's false, so don't forget to enable it

      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function

      opener: function (openerElement) {
        return openerElement.is('img')
          ? openerElement
          : openerElement.find('img')
      },
    },
  })

  /* Magnific-popup Swipe support
  -------------------------------------------------------*/
  $('.gallery a').click(function () {
    setTimeout(function () {
      /* Swipe next */
      $('.mfp-container').swiperight(function () {
        $('.mfp-arrow-right').magnificPopup('next')
      })
      /* Swipe prev */
      $('.mfp-container').swipeleft(function () {
        $('.mfp-arrow-left').magnificPopup('prev')
      })
    }, 500)
  })

  /* DIDASCALIA: Sposta la classe w-60(che definisce la larghezza dell'immagine)
  sull'elemento genitore che contiene la didascalia usato per Santachiara
  -------------------------------------------------------*/
  var $caption = $('.wp-caption')
  var $imgCaption = $caption.find('img')

  $caption.each(function () {
    var $classImg = $(this).find('img').attr('class')
    $(this).addClass($classImg)
  })

  $imgCaption.addClass('w-100')

  /* Accordion
    -------------------------------------------------------*/
  function openFirstPanel() {
    $('.first-open > div:first-child > .accordion-item-panel')
      .addClass('open')
      .slideDown()
    $('.first-open > div:first-child > .accordion-item-voice').addClass('open')
    $('.first-open > div:first-child').addClass('open')
  }

  openFirstPanel()

  $('.accordion .accordion-item-voice').click(function () {
    var $accordion = $(this).parent().parent()

    var allPanels = $accordion.find('div > .accordion-item-panel')
    var allVoice = $accordion.find('div > .accordion-item-voice')

    var $this = $(this)
    var $target = $this.next()

    if ($target.hasClass('open')) {
      $target.removeClass('open').stop().slideUp()
      allVoice.removeClass('open')
      allPanels.removeClass('open')
    } else {
      allPanels.removeClass('open').stop().slideUp()
      allVoice.removeClass('open')
      $target.addClass('open').stop().slideDown()
      $this.addClass('open')
    }

    return false
  })

  /* Waypoints Animate
  -------------------------------------------------------*/
  // $('.way-animate').waypoint(function () {
  //   var animation = $(this.element).attr('animation-name');
  //   $(this.element).addClass(animation);

  // }, {
  //   offset: '90%'
  // });

  $('.way-animate').waypoint(
    function () {
      var wayElement = $(this.element)
      var animation = wayElement.attr('class').split(/\s+/)

      $.each(animation, function (index, item) {
        if (item.includes('fx-')) {
          var newclass = item.replace(/fx-/gi, '')
          wayElement.removeClass(item)
          wayElement.addClass(newclass)
        }
      })
    },
    {
      offset: '90%',
    },
  )

  /* OWL Carousel snwth
  -------------------------------------------------------*/
  $('.owl-testimonials').owlCarousel({
    responsiveClass: true,
    items: 2,
    autoplay: false,
    //autoplayTimeout: 5000,
    //autoplayHoverPause: true,
    autoHeight: true,
    rewind: true,
    touchDrag: true,
    // loop: true,
    smartSpeed: 1000,
    margin: 10,
    nav: true,
    dots: true,
    navText: [
      '<i class="icon-left-open-big"></i>',
      '<i class="icon-right-open-big"></i>',
    ],
    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1,
        margin: 30,
        autoplay: false,
      },
      // breakpoint from 0 up
      576: {
        items: 2,
        margin: 30,
        autoplay: false,
      },
      // breakpoint from 0 up
      768: {
        items: 1,
        autoplay: false,
      },
    },
  })

  /* RELATED OWL Carousel plugin
  -------------------------------------------------------*/
  $('.related-owl').owlCarousel({
    responsiveClass: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoHeight: true,
    rewind: true,
    touchDrag: true,
    loop: true,
    smartSpeed: 1000,
    margin: 20,
    nav: true,
    dots: true,
    navText: [
      '<i class="icon-left-open-big"></i>',
      '<i class="icon-right-open-big"></i>',
    ],

    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1,
        autoplay: true,
        nav: false,
      },
      // breakpoint from 576 up
      460: {
        items: 2,
        autoplay: true,
        nav: false,
      },
      // breakpoint from 576 up
      768: {
        items: 2,
        autoplay: true,
        nav: true,
      },
    },
  })

  /* AddClass Parallax-animation al Plugin di Gutenber
  -------------------------------------------------------*/
  $('.parallax-animation')
    .children('.bg__stretched')
    .addClass('parallax-animation')

  /* Parallax
  -------------------------------------------------------*/
  $.fn.parallax = function (options) {
    var windowHeight = $(window).height()

    // Establish default settings
    var settings = $.extend(
      {
        speed: 0.15,
      },
      options,
    )

    // Iterate over each object in collection
    return this.each(function () {
      // Save a reference to the element
      var $this = $(this)

      // Set up Scroll Handler
      $(document).scroll(function () {
        var scrollTop = $(window).scrollTop()
        var offset = $this.offset().top
        var height = $this.outerHeight()

        // Check if above or below viewport
        if (
          offset + height <= scrollTop ||
          offset >= scrollTop + windowHeight
        ) {
          return
        }

        var yBgPosition = Math.round(
          (offset - scrollTop - 120) * settings.speed,
        )

        // Apply the Y Background Position to Set the Parallax Effect
        $this.css('background-position', 'center ' + yBgPosition + 'px')
      })
    })
  }

  $('.parallax-animation').parallax({
    speed: 0.25,
  })
}) /*Close jQuery*/
