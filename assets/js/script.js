(function ($) {
  var menuList = $('.menu-mobile li.menu-item-has-children');
  $.each(menuList, function () {
    $(this).click(function () {
      $(this).addClass('active');
      $('.menu-mobile').addClass('sub-menu-open');
      $(this).parent('ul').addClass('collapsed');
    });
  });

  $('.menu-back').click(function () {
    $('.menu-item').removeClass('active');
    $('.menu-mobile').removeClass('sub-menu-open');
    $('.menu-mobile ul').removeClass('collapsed');
  });

  var menuToggler = $('.menu-toggler');

  menuToggler.on('click', function () {
    $(this).toggleClass('active');
    $(this).toggleClass('not-active');
    $('.menu-mobile').toggleClass('active');
  });

  var prev = `
    <button class="btn rounded-0 bg-white">
      <svg width="16" height="16" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.0301 23L16 19.1859L7.93985 11.5578L16 3.81407L12.0301 -3.47062e-07L1.00031e-06 11.5578L12.0301 23Z" fill="#020203"/>
      </svg>
    </button>
  `;

  var next = `
    <button class="btn rounded-0 bg-white">
      <svg width="16" height="16" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.96992 0L0 3.81407L8.06015 11.4422L0 19.1859L3.96992 23L16 11.4422L3.96992 0Z" fill="#020203"/>
      </svg>
    </button>
  `;

  $('.agenda-list').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    swipeToSlide: 3,
    arrows: true,
    infinite: false,
    prevArrow: prev,
    nextArrow: next,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
})(jQuery);
