/* Search AJAX
  -------------------------------------------------------*/
jQuery(document).ready(function ($) {
  let timer; // Timer identifier
  const waitTime = 300; // Wait time in milliseconds

  // Input selector
  var inputSearch = document.querySelector("#live-search-input");
  var resetBtnSearch = $(".live-search-reset-btn");

  // Listen for `keyup` event
  inputSearch.addEventListener("keyup", (e) => {
    var numChars = inputSearch.value.length;

    //console.log(numChars)

    // Clear timer
    clearTimeout(timer);

    if (numChars >= 3) {
      //console.log('sopra i 3')
      // Wait for X ms and then process the request
      timer = setTimeout(() => {
        //console.log(numChars)
        ajaxSearch();
      }, waitTime);
    } else {
      resetResults();
    }
  });

  // Search function
  function ajaxSearch() {
    $.ajax({
      url: live_search.ajax_url, // use the globally declared variable
      type: "POST",
      data: {
        action: "live_search", // Call the PHP function
        keyword: $("#live-search-input").val(),
      },
      success: function (data) {
        $(".live-search-reset-btn").fadeIn(500);
        $(".live-search-results").delay(300).html(data).addClass("active");
        var numEl = $(".live-search-item").length;
        //console.log('NUM EL' + numEl)

        if (numEl > 0) {
          $(".num-result-search").html(numEl);
          $(".search-results-number").delay(300).fadeIn(500);
        } else {
          $(".search-results-number").hide();
        }
      },
    });
  }

  /* RESET
    ----------------------------------------------------------*/
  resetBtnSearch.on("click", function () {
    $(".search-results-number").hide();
    $(".live-search-results").html("").slideUp(100).removeClass("active");
    $(this).fadeOut(100);
    $("input#live-search-input").focus();
  });

  function resetResults() {
    $(".search-results-number").hide();
    $(".live-search-results").html("").slideUp(100);
    resetBtnSearch.fadeOut(100);
  }

  /* SUBMIT link
----------------------------------------------------------*/
  $(".submit-search-form").click(() => {
    $("#live-search-form").submit();
  });
}); // CLOSE jQuery
