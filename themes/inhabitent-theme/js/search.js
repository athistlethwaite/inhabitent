// Toggle search button

jQuery(document).ready(function ($) {
  $('.search-field').attr("placeholder", "Type and hit enter...");
  $('.search-field').hide();

  $('.search-button').click(() => {
    $('header .search-field').show('slow');
    $('header .search-field').focus();
  });

  $('header .search-field').on('blur', function () {
    if ($('header .search-field').val() === '') {
      $('header .search-field').hide(500);
    }

  });
});


//Stretch Goal - Change of header:
// $(window).scroll(function () {
//   var screenPosition = $(document).scrollTop();
//   if (screenPosition < $('.front-header').height() || screenPosition < $('.page-template-about .entry-header').height()) {
//     $('.site-header').addClass('front-hero-image');
//   } else {
//     $('.site-header').removeClass('front-hero-image');
//   }
// });