jQuery(document).ready(function ($) {
  /* Menu mobile
  -------------------------------------------------------*/
  //Disabilito i link per le voci con un sub menu
  $('.menu-item-has-children > a').click(function (e) {
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

  var $swipeArea = $('.swipe-area')
  //slide menu sweep
  $swipeArea.swipe({
    swipeRight: function () {
      $menu.addClass('open')
      $toggle.addClass('open')
    },
  })

  $menu.swipe({
    swipeLeft: function () {
      $menu.removeClass('open')
      $toggle.removeClass('open')
    },
  })

  /* Scroll
  -------------------------------------------------------*/
  var $adminBar = $('#wpadminbar').outerHeight()
  if ($adminBar === undefined) {
    var $adminBar = 0
  }

  $(window).scroll(function () {
    var $scrollPos = $(this).scrollTop()
    var $topBar = $('.top-bar').outerHeight()

    console.log($adminBar)
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
  var $mainSearch = $('.main-search-icon'),
    $iconSearch = $('.main-search-icon i'),
    $formCerca = $('.search-form-container')

  $mainSearch.click(function (e) {
    e.preventDefault()
    $formCerca.fadeToggle(150)
    $iconSearch.toggleClass('icon-cancel')
    $(this).toggleClass('active')
    $('.search-form-container .search-form input').focus()
  })

  // Funzione al click fuori dall'elemento l'elemento sparisce
  $(document).mouseup(function (e) {
    // if the target of the click isn't the container nor a descendant of the container
    if (!$formCerca.is(e.target) && $formCerca.has(e.target).length === 0) {
      $formCerca.fadeOut(150)
      $iconSearch.removeClass('icon-cancel')
      $(this).removeClass('active')
    }
  })

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
  $('.open-in').addClass('magnific-open')

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
  $('.gallery a, .wp-block-gallery a').click(function () {
    setTimeout(function () {
      /* Swipe next */
      $('.mfp-container').swipe({
        swipeRight: function () {
          $('.mfp-arrow-right').magnificPopup('prev')
          //alert('right');
        },
      })

      /* Swipe prev */
      $('.mfp-container').swipe({
        swipeLeft: function () {
          $('.mfp-arrow-left').magnificPopup('next')
          //alert('left');
        },
      })
    }, 500)
  })

  /* Accordion
    -------------------------------------------------------*/
  // function openFirstPanel() {
  //   $('.first-open > div:first-child > .accordion-item-panel').addClass('active').slideDown();
  //   $('.first-open > div:first-child > .accordion-item-voice').addClass('active');
  //   $('.first-open > div:first-child').addClass('active');
  // }

  // openFirstPanel();

  // $('.accordion .accordion-item-voice').click(function () {

  //   var $accordion = $(this).parent().parent();

  //   var allPanels = $accordion.find('div > .accordion-item-panel');
  //   var allVoice = $accordion.find('div > .accordion-item-voice');

  //   var $this = $(this);
  //   var $target = $this.next();

  //   if ($target.hasClass('active')) {
  //     $target.removeClass('active').stop().slideUp();
  //     allVoice.removeClass('active');
  //     allPanels.removeClass('active');
  //   } else {
  //     allPanels.removeClass('active').stop().slideUp();
  //     allVoice.removeClass('active');
  //     $target.addClass('active').stop().slideDown();
  //     $this.addClass('active');
  //   }

  //   //Scroll to element - commentare per eliminare la funzione e lascare return false
  //   var targetEl = $(this); // Set the target as variable
  //   if ($(window).width() < 992) {
  //     setTimeout(function () {
  //       $('html, body').stop().animate({
  //         scrollTop: $(targetEl).offset().top - 65
  //       }, 400, function () {
  //         location.hash = targetEl; //attach the hash (#jumptarget) to the pageurl
  //       });
  //     }, 400);
  //   } else {
  //     return false;
  //   }

  // return false;
  // });

  /* Waypoints Animate
  // -------------------------------------------------------*/
  // $('.way-animate').waypoint(
  //   function () {
  //     $(this.element).addClass('is-inview')
  //   },
  //   {
  //     offset: '90%',
  //   },
  // )

  $('.way-animate').waypoint(
    function (direction) {
      if (direction === 'down') {
        $(this.element).addClass('is-inview')
      } else {
        $(this.element).removeClass('is-inview')
      }
    },
    {
      offset: '90%',
    },
  )

  /* OWL Carousel snwth
  -------------------------------------------------------*/
  // $(".owl-testimonials").owlCarousel({
  //   responsiveClass: true,
  //   items: 2,
  //   autoplay: true,
  //   //autoplayTimeout: 5000,
  //   //autoplayHoverPause: true,
  //   autoHeight: true,
  //   rewind: true,
  //   touchDrag: true,
  //   // loop: true,
  //   smartSpeed: 1000,
  //   margin: 10,
  //   nav: true,
  //   dots: true,
  //   navText: [
  //     '<i class="icon-left-open-big"></i>',
  //     '<i class="icon-right-open-big"></i>'
  //   ],
  //   responsive: {
  //     // breakpoint from 0 up
  //     0: {
  //       items: 1,
  //       autoplay: false
  //     },
  //   }
  // });

  /* AddClass Parallax-animation al Plugin di Gutenberg
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

  /* data-tabs
    -------------------------------------------------------*/
  $('.nav-tabs li').click(function () {
    $('.nav-tabs li').removeClass('tabs-active')
    $('.tabs-accordion .accordion-item-panel').removeClass('tabs-active')
    var elTab = $(this)
    var dataTabsNav = $(this).attr('data-tabs-nav')
    elTab.addClass('tabs-active')
    elTab
      .parent()
      .parent()
      .find("[data-tabs-panel='" + dataTabsNav + "']")
      .addClass('tabs-active')
  })

  //Resize chiudo il menù al resize
  $(window).resize(function () {
    if ($(window).width() > 991) {
      $('.tabs-accordion .active').removeClass('active')
      $('.accordion-item-panel').slideUp()
    }
  })

  /* jump-to scroll
    -------------------------------------------------------*/
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault()
    var target = this.hash
    var $target = $(target)
    $('html, body')
      .stop()
      .animate(
        {
          scrollTop: $target.offset().top - 65,
        },
        900,
        'swing',
        function () {
          // window.location.hash = target;
        },
      )
  })

  /* --------------------------------------------------------
  Form
  -------------------------------------------------------- */
  /* Form-type-icon effect
    -------------------------------------------------------*/
  $('.form-type-icon_item input, .form-type-icon_item textarea')
    .focus(function () {
      $(this).parent().parent('p').addClass('has-value')
    })
    // blur input fields on unfocus + if has no value
    .blur(function () {
      var text_val = $(this).val()
      if (text_val === '') {
        $(this).parent().parent('p').removeClass('has-value')
      }
    })

  /* Form-type-line effect - Resize Label on Focus
  -------------------------------------------------------*/
  // on focus
  $('.form-type-line_item input, .form-type-line_item textarea')
    .focus(function () {
      $(this).parent().siblings('label').addClass('has-value')
    })
    // blur input fields on unfocus + if has no value
    .blur(function () {
      var text_val = $(this).val()
      if (text_val === '') {
        $(this).parent().siblings('label').removeClass('has-value')
      }
    })

  $('.wpcf7 > form').click(function () {
    $(this).removeClass('invalid')
  })

  /* Send Form
  ----------------------------------------------------------*/
  document.addEventListener(
    'wpcf7mailsent',
    function () {
      $('.form-type-icon, .acceptance, .btn-form').slideUp()

      var targetForm = $('.wpcf7-form')
      $('html, body')
        .stop()
        .animate(
          {
            scrollTop: targetForm.offset().top - 80,
          },
          300,
          'swing',
          function () {
            // window.location.hash = target;
          },
        )
    },
    false,
  )

  /* Accept Privacy policy active button form
  ----------------------------------------------- */
  acceptPrivacy()

  function acceptPrivacy() {
    var checkBox = $('.acceptance input')
    var wrapSendForm = $('.btn-form input')

    checkBox.change(function () {
      $(wrapSendForm).toggleClass('disable')
    })
  }
}) /*Close jQuery*/
