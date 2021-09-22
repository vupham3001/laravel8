$(function() {
  $('.feedback-slide').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-angle-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-angle-right"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });

  $('.footer-iconandlink').mouseover(function() {
    $( '#imgContact').removeClass('txt-hidden').addClass( 'readmore');
  });

  $('.footer-iconandlink').mouseout(function() {
    $( 'imgContact').removeClass('readmore').addClass('txt-hidden');
  });

  $('.login').click(function() {
    $('#loginRegisterModal').modal();
  });

  $('.close-chatbox').click(function() {
    $('#messenger').toggle('slow');
  });

  $('.logo-messenger').click(function() {
    $('#messenger').slideToggle('slow');
  });

  if($('#register input').hasClass('is-invalid')) {
    $('#loginRegisterModal').modal('show');
    $('#register-nav-tab').trigger('click');
  }

  if($('#login input').hasClass('is-invalid')) {
    $('#loginRegisterModal').modal('show');
    $('#login-nav-tab').trigger('click');
  }
});
