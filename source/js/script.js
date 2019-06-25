var burger = document.querySelector('.main-nav__toggle');
var header = document.querySelector('.main-nav');

  burger.addEventListener('click', function () {
    header.classList.toggle('main-nav--opened');
  })
