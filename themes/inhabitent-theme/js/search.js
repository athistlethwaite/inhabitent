// Toggle search button

jQuery(document).ready(function ($) {
  $('.search-field').attr("placeholder", "Type and press enter...");
  $('.search-field').hide();
  $('.search-submit').hide();
  console.log(123);

  $('.search-button').click(() => {
    $('header .search-field').show('slow');
  });

  $('header .search-field').on('blur', function () {
    $('header .search-field').hide(500);
  });

});