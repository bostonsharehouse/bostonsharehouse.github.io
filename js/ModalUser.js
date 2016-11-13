$(document).ready(function () {
  $('#content__member > ul > li').hover(
    function () {
      $(this).children('img').css({
        '-webkit-filter': 'brightness(0.65) blur(3px)',
        'filter': 'brightness(0.65) blur(3px)',
        'transition': 'none'
      });
      $(this).children('.member-name').css('display', 'flex');
    },
    function () {
      $(this).children('img').css({
        '-webkit-filter': 'none',
        'filter': 'none',
        'transition': '0.3s'
      });
      $(this).children('.member-name').css('display', 'none');
    }
  );
  $('#content__member > ul > li, .content__contact__box__company > button').click(function () {
    $('body').css('overflow', 'hidden');
    $('body').append('<div id="modal__window"></div>');
    var mw = '.' + $(this).data('modal');
    var mW = $(window).innerWidth() / 4;
    var mH = $(window).innerHeight() / 4;
    $(mw).css({
      'top': mH,
      'left': mW
    })
    $(mw).css('display', 'flex');
  });

  $('.modal__content > button').on('click', function () {
    $('#modal__window').remove();
    $('.modal__content').css('display', 'none');
    $('body').css('overflow', 'inherit');
  });
});
