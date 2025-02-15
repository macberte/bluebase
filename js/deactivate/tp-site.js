!(function (e) {
  function a(e) {
    var a = jQuery(e)
    return 0 == a.length ? null : a
  }
  a(document).ready(function () {
    var a, n
    ;(a = e('.tp-burger-menu-trigger')),
      (n = e('#tp-burger-menu')),
      e('nav', n),
      a.on('click', function () {
        e(this),
          n.hasClass('active')
            ? (n.removeClass('active'),
              e('body').removeClass('tp-burger-menu-active'))
            : (n.addClass('active'),
              e('body').addClass('tp-burger-menu-active'))
      }),
      e(window).on('resize', function () {
        e('body').hasClass('tp-burger-menu-active') &&
          e('#tp-burger-menu-trigger').trigger('click')
      })
  }),
    a(window).on('load', function () {
      var n,
        t,
        o = (function () {
          var e = []
          return (
            (e[0] = new LazyLoad({ elements_selector: '.lazy' })),
            (e[1] = new LazyLoad({
              elements_selector: '.lazy-animate',
              threshold: 0,
              thresholds: '0px 0px -25% 0px',
            })),
            e
          )
        })()
      ;(n = o),
        a('[data-slick-item]') &&
          (e('[data-slick-item="header-cases-slider"]')
            .on('init reInit', function (a, n) {
              var t = e('.lazy-event-item', n.$slides[n.slickCurrentSlide()])
              LazyLoad.load(t.get(0)),
                e(
                  '<div class="container-counter">1<span class="sep">/</span>' +
                    n.slideCount +
                    '</div>',
                ).insertAfter(e(n.$prevArrow))
            })
            .slick({
              fade: !0,
              slide: '.item',
              infinite: !0,
              swipe: !1,
              speed: 2e3,
              autoplay: !0,
              autoplaySpeed: 6e3,
              pauseOnHover: !1,
              pauseOnFocus: !0,
              dots: !1,
              arrows: !0,
              appendArrows: e('.container-header-cases .container-arrow'),
              prevArrow: '<div class="slick-prev slick-arrow"></div>',
              nextArrow: '<div class="slick-next slick-arrow"></div>',
            })
            .on('beforeChange', function (a, n, t, o) {
              var r = e('.lazy-event-item', n.$slides[o])
              LazyLoad.load(r.get(0))
            })
            .on('afterChange', function (a, n, t) {
              var o = (t || 0) + 1
              e('.container-counter').html(
                o + '<span class="sep">/</span>' + n.slideCount,
              )
            }),
          e('[data-slick-item="slideshow-focus-slider"]')
            .on('init reInit setPosition', function (e, a) {
              n[0].update()
            })
            .slick({
              fade: !1,
              slide: '.banner',
              infinite: !0,
              slidesToShow: 3,
              centerMode: !0,
              adaptiveHeight: !1,
              variableWidth: !0,
              autoplay: !0,
              speed: 1500,
              autoplaySpeed: 4e3,
              pauseOnHover: !0,
              arrows: !1,
              dots: !0,
              customPaging: function (e, a) {
                return '<span></span>'
              },
              appendDots: e(
                '.container-focus.slideshow-focus .container-pager',
              ),
            })),
        e('.allclick').each(function () {
          var a = e(this)
          a.css('cursor', 'pointer'),
            e('a', this).one('click', function (e) {
              e.preventDefault()
            }),
            a.on('click', function (n) {
              var t = e('a', this),
                o = e(t[0])
              if (a.hasClass('blank') || '_blank' == o.attr('target'))
                window.open(o.attr('href'), '_blank')
              else if (0 == o.attr('href').indexOf('#')) {
                n.preventDefault()
                var r = o.attr('href')
                e(r).animatescroll({ padding: 80 })
              } else if (o.is('[data-fancybox]')) {
                var i = tpActivateFancybox()
                e.fancybox.open(t, i)
              } else window.open(o.attr('href'), '_self')
            })
        }),
        e('a[href^="#"], [data-scollto]').each(function () {
          e(this).on('click', function (n) {
            var t = '',
              o = {}
            if (e(this).is('a') && '#' != e(this).attr('href'))
              t = e(this).attr('href')
            else {
              if (!e(this).is('[data-scollto]')) return !1
              t = e(this).data('scollto')
            }
            n.preventDefault(),
              (o = a('body.mobile')
                ? { padding: 30 }
                : { padding: 120, scrollSpeed: 1e3, easing: 'easeInOutSine' }),
              e(t).animatescroll(o)
          })
        }),
        e('[data-fancybox]').fancybox({
          infobar: !0,
          protect: !0,
          transitionEffect: 'slide',
          transitionDuration: 500,
          loop: !0,
          hash: !1,
          buttons: ['close'],
          thumbs: { autoStart: !1, hideOnClose: !0 },
          iframe: {
            tpl:
              '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen allow="autoplay; fullscreen" src="" sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-pointer-lock"></iframe>',
            preload: !1,
          },
          beforeShow: function (a, n) {
            e('html').css({ overflow: 'hidden' })
          },
          beforeClose: function (a, n) {
            e('html').attr('style', '')
          },
        }),
        (t = e('header.site-header, .scroll-down, #tp-burger-menu')),
        e(window).on('scroll', function () {
          var a = e(window).scrollTop()
          a >= 150 ? t.addClass('scroll') : a < 100 && t.removeClass('scroll')
        }),
        e('.wpcf7-form').each(function () {
          e(this).wpcf7Check()
        })
    }),
    a(window).resize(function () {})
})(jQuery)
