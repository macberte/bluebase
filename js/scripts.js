jQuery(document).ready(function ($) {
  /* =========================================================
  ! VARIABILI
  /*=========================================================*/
  var $window = $(window),
    $header = $(".main-header"),
    $adminBar = $("#wpadminbar"),
    $toggleMenu = $(".toggle"),
    $menuNav = $(".nav-container"),
    $body = $("body"),
    $overlayMain = $(".main-overlay"),
    mypos = $window.scrollTop();

  /* =========================================================
  ! MENU
 /*=========================================================*/

  //Disabilito i link per le voci con un sub menu
  $(".menu-item-has-children > a, .search-menu-icon").click(function (e) {
    e.preventDefault();
  });

  /*  Menu mobile
  ----------------------------------------------------------*/
  //Open slide menu
  $toggleMenu.click(function () {
    $menuNav.toggleClass("open");
    $toggleMenu.toggleClass("open");
    $body.toggleClass("open-menu");
  });

  //Accordion Menu mobile slideDown
  $(".main-menu > .menu-item-has-children > a").click(function (e) {
    if ($(window).width() < 991) {
      $(".main-menu .sub-menu").slideUp(200),
        $(this).next().is(":visible") || $(this).next().slideDown(200),
        e.stopPropagation();
    } else {
      return;
    }
  });

  //Resize chiudo il menù al resize
  $(window).resize(function () {
    if ($(window).width() > 991) {
      $(".main-menu li").removeClass("is-moved");
      $menuNav.removeClass("open");
      $toggleMenu.removeClass("open");
      $body.removeClass("open-menu");
    }
  });

  /* --------------------------------------------------------
! Stagger Element menu
-------------------------------------------------------- */
  var moveButton = document.querySelector(".toggle");
  var items = document.querySelectorAll(".main-menu > li, .stagger");
  var isMoved = false;

  moveButton.onclick = function () {
    // toggle flag

    isMoved = !isMoved;

    for (var i = 0; i < items.length; i++) {
      // get function in closure, so i can iterate
      var toggleItemMove = getToggleItemMove(i);
      // stagger transition with setTimeout
      setTimeout(toggleItemMove, i * 50);
    }
  };

  function getToggleItemMove(i) {
    var item = items[i];
    return function () {
      item.classList.toggle("is-moved");
    };
  }

  /* =========================================================
  ! SCROLL
  /*=========================================================*/

  /* Header slide Up
  -------------------------------------------------------*/
  $(window).scroll(function () {
    var myadminBarHeight = $adminBar.outerHeight();
    var mypos2 = $window.scrollTop();

    //Small header
    if (mypos2 > 20) {
      $header.css({
        top: 0 + myadminBarHeight,
      });
      $body.addClass("scroll");
    } else {
      $header.css({
        top: 0 + myadminBarHeight,
      });
      $body.removeClass("scroll");
    }
    //Hide Header only desktop
    // if (mypos > 200 && $window.width() > 991) {
    //   if ($window.scrollTop() > mypos) {
    //     //console.log(mypos)
    //     $header.addClass("headerup");
    //   } else {
    //     $header.removeClass("headerup");
    //   }
    // } else {
    //   $header.removeClass("headerup");
    // }
    // mypos = $window.scrollTop();
  });

  /* --------------------------------------------------------
  ! Social Share Appear
  -------------------------------------------------------- */
  var socialShareWrap = $(".social-share-wrap");

  $(document).on("click", function (event) {
    const target = $(event.target);
    if (target.closest(".btn-share").length) {
      socialShareWrap.toggleClass("active");
    } else if (!target.closest(".custom-social-share").length) {
      socialShareWrap.removeClass("active");
    }
  });

  /* =========================================================
  ! VIEW PORT CHECKER
  /*=========================================================*/

  $(".way-animate").viewportChecker({
    classToAdd: "is-inview",
    offset: 5 + "%",
  });

  $(".way-animate-repeat").viewportChecker({
    classToAdd: "is-inview",
    repeat: true,
    offset: 5 + "%",
  });

  /* =========================================================
  ! FANCY BOX - Gallery
  /*=========================================================*/

  $(".wp-block-gallery, .wp-block-media-text__media, .wp-block-image, .open-in")
    .not(".wp-block-gallery > .wp-block-image")
    .each(function () {
      $(this)
        .find("a")
        .fancybox({
          buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
          loop: true,
          animationEffect: "zoom",
          transitionEffect: "zoom-in-out",
          mobile: {
            clickSlide: "close",
            helpers: {
              overlay: {
                locked: false,
              },
            },
          },
        })
        .attr("data-fancybox", "gallery");
    });

  /* =========================================================
  ! SLICK SLIDER
  /*=========================================================*/

  $(".slick-1").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    speed: 300,
    autoplay: false,
    autoplaySpeed: 2000,
    infinite: true,
    adaptiveHeight: true,
    prevArrow: '<span class="slick-prev"></span>',
    nextArrow: '<span class="slick-next"></span>',
    //swipeToSlide: true,
    //vertical: true,
    // fade: true,
    // cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "20px",
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".slick-2").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    speed: 300,
    centerMode: true,
    centerPadding: false,
  });

  $(".slick-3").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    speed: 1500,
    centerMode: true,
    centerPadding: "25vw",
    prevArrow: '<span class="slick-prev"></span>',
    nextArrow: '<span class="slick-next"></span>',
  });

  $(".slick-3").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      $(".slick-current").removeClass("qweqweqweqweqqweqweqweqw");
    }
  );
  $(".slick-3").on(
    "afterChange",
    function (event, slick, currentSlide, nextSlide) {
      $(".slick-current").addClass("qweqweqweqweqqweqweqweqw");
    }
  );

  /* =========================================================
 !  SCROLL TO
  /*=========================================================*/
  $(".scroll_to").click(function (e) {
    e.preventDefault();
    var navHeight = $(".container-nav").innerHeight() + 10;
    var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top - navHeight;
    $("html, body").stop().animate(
      {
        scrollTop: offsetTop,
      },
      500
    );
  });

  /* =========================================================
  ! PARALLAX
  /*=========================================================*/

  // Parallax simple
  $.fn.parallax = function (options) {
    var windowHeight = $(window).height();

    // Establish default settings
    var settings = $.extend(
      {
        speed: 0.15,
      },
      options
    );

    // Iterate over each object in collection
    return this.each(function () {
      // Save a reference to the element
      var $this = $(this);

      // Set up Scroll Handler
      $(document).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var offset = $this.offset().top;
        var height = $this.outerHeight();

        // Check if above or below viewport
        if (
          offset + height <= scrollTop ||
          offset >= scrollTop + windowHeight
        ) {
          return;
        }

        var yBgPosition = Math.round(
          (offset - scrollTop - 120) * settings.speed
        );

        // Apply the Y Background Position to Set the Parallax Effect
        $this.css("background-position", "center " + yBgPosition + "px");
      });
    });
  };

  $(".parallax-animation").parallax({
    speed: 0.25,
  });

  /* Parallax Fit Cover
 ----------------------------------------------------------*/
  $.fn.parallax_2 = function (options) {
    var windowHeight = $(window).height();

    // Establish default settings
    var settings = $.extend(
      {
        speed: 0.15,
      },
      options
    );

    // Iterate over each object in collection
    return this.each(function () {
      // Save a reference to the element
      var $this = $(this);

      // Set up Scroll Handler
      $(document).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var offset = $this.offset().top;

        var height = $this.outerHeight();

        // Check if above or below viewport
        if (
          offset + height <= scrollTop ||
          offset >= scrollTop + windowHeight
        ) {
          return;
        }

        var yBgPosition = Math.round(
          (offset - scrollTop - 200) * settings.speed
        );
        console.log("offset:" + offset);
        console.log("scrollTop:" + scrollTop);
        console.log("yBgPosition:" + yBgPosition);
        // Apply the Y Background Position to Set the Parallax Effect
        $this.css("top", +yBgPosition + "px");
      });
    });
  };

  $(".parallax-fit").parallax_2({
    speed: -0.2,
  });

  /* =========================================================
 ! FORM
/*=========================================================*/

  /* Form has value
    -------------------------------------------------------*/
  $(".form-item input, .form-item textarea, .form-item select")
    .focus(function () {
      $(this).parent().parent(".form-item").addClass("has-value");
    })
    // blur input fields on unfocus + if has no value
    .blur(function () {
      var text_val = $(this).val();
      if (text_val === "") {
        $(this).parent().parent("p").removeClass("has-value");
      }
    });

  //button reset
  $('.form-command button[type="reset"]').click(function () {
    $(".form-item").removeClass("has-value");
    add_class_precompiled_field();
  });

  //Assegno la classe has-value ai campi precompilati
  add_class_precompiled_field();

  function add_class_precompiled_field() {
    $(".form-item input").each(function () {
      if ($(this).attr("value") !== "") {
        $(this).parent().parent(".form-item").addClass("has-value");
      }
    });
  }

  //Eseguo un azione quando il form con determinato ID è inviato correttamente
  var formSend = $("#wpcf7-f108-p78-o3"),
    formSendParent = formSend.parent(),
    formThankyou = $(".form-thankyou");

  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      if ("108" == event.detail.contactFormId) {
        formThankyou.show().appendTo(formSendParent);
        formSend.slideUp(500, function () {
          setTimeout(function () {
            formThankyou.addClass("visible");
          }, 100);
        });
      }
    },
    false
  );

  /* --------------------------------------------------------
  Accordion Tag
  -------------------------------------------------------- */
  var btnMetaAccordion = $(".btn-accordion-meta");
  var wrapMetaAccordion = $(".meta-accordion-wrap");
  var metaAccordion = $(".accordion-meta");

  btnMetaAccordion.click(function () {
    metaAccordion.slideToggle(200);
    $(this).toggleClass("visible");
    wrapMetaAccordion.toggleClass("visible");
  });

  /* =========================================================
  Click Search
  /*=========================================================*/
  var searchButton = $(".btn-search"),
    searchWall = $(".live-search-wall"),
    searchClose = $(".live-search-close, .main-overlay");

  searchButton.click(function (e) {
    e.preventDefault();
    searchWall.toggleClass("active");
    $body.toggleClass("overflow-hidden open-search");
    $overlayMain.fadeToggle();
    if (window.matchMedia("(min-width: 1024px)").matches) {
      setTimeout(function () {
        $("#live-search-input").focus();
      }, 300);
    }
  });
  searchClose.click(function (e) {
    searchWall.removeClass("active");
    $body.removeClass("overflow-hidden open-search");
    $overlayMain.fadeOut();
  });

  /*============= COMPLIANZ MANAGE CONSENT CUSTOM BUTTON =================*/
  function addEvent(event, selector, callback, context) {
    document.addEventListener(event, (e) => {
      if (e.target.closest(selector)) {
        callback(e);
      }
    });
  }
  addEvent("click", ".cmplz-show-banner", function (e) {
    e.preventDefault();
    document.querySelectorAll(".cmplz-manage-consent").forEach((obj) => {
      obj.click();
    });
  });
}); /*Close jQuery*/
