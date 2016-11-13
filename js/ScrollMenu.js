$(document).ready(function () {
  let height =  $(window).scrollTop();
  let sh = $(window).height();
  $('header, .header__main').css('height', sh);
  $(window).resize(function () {
    let sh = $(window).height();
    $('header, .header__main').css('height', sh);
  });
});

// $(document).ready(function () {
//   $(window).scroll(function () {
//     let top = $(window).scrollTop();
//     if (top > 715) {
//       $('.header__main__menu').css({
//         'position': 'fixed',
//         'top': 0
//       });
//       if (top > 805) {
//         $('.header__main__menu').css({
//           'background-color': 'rgba(255,255,255,1)',
//           'box-shadow': '0 1px 1px 0 rgba(0,0,0,0.2)'
//         });
//       } else {
//         $('.header__main__menu').css({
//           'background-color': 'rgba(255,255,255,0.75)',
//           'box-shadow': 'none'
//         });
//       }
//     } else {
//       $('.header__main__menu').css({
//         'position': 'absolute',
//         'bottom': 0,
//         'top': 'inherit'
//       });
//     }
//   });
// });