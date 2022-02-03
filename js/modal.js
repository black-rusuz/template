$(document).ready(function () {
  // TODO: Чё по закрытию формы?
  $('.order').click(function () {
    openModal()
  });
})

function openModal() {
  $('.modal').toggleClass('active');
  $('body').toggleClass('lock');
}