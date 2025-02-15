/* Search AJAX
  -------------------------------------------------------*/
;(function ($) {
  $(document).ready(function () {
    // Live Search
    $('.main-search-icon').on('click', function () {
      $('.live-search-modal').fadeIn(300)
      $('input#live-search-input').focus()
      $('#live-search-form').addClass('active')
    })
    $('input#live-search-input').on('input', function () {
      if (this.value.length >= 3) {
        $.ajax({
          url: live_search.ajax_url, // use the globally declared variable
          type: 'POST',
          data: {
            action: 'live_search', // Call the PHP function
            keyword: $('#live-search-input').val(),
          },
          success: function (data) {
            $('.live-search-reset-btn').fadeIn(500)
            $('.live-search-results').delay(500).slideDown(400).html(data)
          },
        })
      } else {
        $('.live-search-results').slideUp(400)
        $('.live-search-reset-btn').fadeOut(500)
      }
    })
    $('.live-search-reset-btn').on('click', function () {
      $('.live-search-results').html('').slideUp()
      $(this).fadeOut(100)
    })
    $('.live-search-close').on('click', function () {
      $('.live-search-modal').fadeOut(500)
      $('.live-search-reset-btn').fadeOut(100)
      $('.live-search-results').html('').slideUp(100)
      $('#live-search-input').val('')
      $('#live-search-form').removeClass('active')
    })
  })
})(jQuery)
