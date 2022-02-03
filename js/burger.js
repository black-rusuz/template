$(document).ready(function () {
  $('.header__burger, .header__list').click(function () {
    openBurger();
  });
});

function openBurger() {
  $('.header__burger, .header__menu').toggleClass('active');
  $('body').toggleClass('lock');
}