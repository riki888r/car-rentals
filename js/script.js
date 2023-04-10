/** @format */
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('header').addClass('sticky');
    } else {
      $('header').removeClass('sticky');
    }
  });
  // slimnav
  $('#navigation nav').slimNav_sk78();
  $('#nav-icon0').click(function () {
    $(this).toggleClass('open');
  });

  $('ul.drop').on('click', '.init', function () {
    $(this).closest('ul').children('li:not(.init)').toggle();
  });

  var allOptions = $('ul.drop').children('li:not(.init)');
  $('ul.drop').on('click', 'li:not(.init)', function () {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $('ul.drop').children('.init').html($(this).html());
    allOptions.toggle();
  });

  $('.banner .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [`<img src='img/left.png'>`, `<img src='img/right.png'>`],
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});
