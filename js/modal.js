$(document).ready(function () {
  $('.order, .modal__close').click(function () {
    openModal();
  });
})

window.onclick = function (event) {
  if (event.target === $('.modal')[0]) {
    openModal();
  }
}

function openModal() {
  $('.modal').toggleClass('active');
  $('body').toggleClass('lock');
}