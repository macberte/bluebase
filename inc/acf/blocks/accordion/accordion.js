jQuery(document).ready(function ($) {

  function openFirstPanel() {
    $('.first-open > div:first-child > .accordion-item-panel').addClass('active').slideDown();
    $('.first-open > div:first-child > .accordion-item-voice').addClass('active');
    $('.first-open > div:first-child').addClass('active');
  }

  openFirstPanel();

  $('.accordion .accordion-item-voice').click(function () {

    var $accordion = $(this).parent().parent();

    var allPanels = $accordion.find('div > .accordion-item-panel');
    var allVoice = $accordion.find('div > .accordion-item-voice');

    var $this = $(this);
    var $target = $this.next();


    if ($target.hasClass('active')) {
      $target.removeClass('active').stop().slideUp();
      allVoice.removeClass('active');
      allPanels.removeClass('active');
    } else {
      allPanels.removeClass('active').stop().slideUp();
      allVoice.removeClass('active');
      $target.addClass('active').stop().slideDown();
      $this.addClass('active');
    }


    //MOBILE Scroll to element - commentare per eliminare la funzione e lascare return false
    var targetEl = $(this); // Set the target as variable
    //lo scroll funziona solo su dispositivi sotto i 992 px
    if ($(window).width() < 992) {
      setTimeout(function () {
        $('html, body').stop().animate({
          scrollTop: $(targetEl).offset().top - 65
        }, 400, function () {
          location.hash = targetEl; //attach the hash (#jumptarget) to the pageurl
        });
      }, 400);
    } else {
      return false;
    }



    // return false;

  }); //click



}); /*Close jQuery*/