var burger = document.querySelector('.page-header__toggle');
var header = document.querySelector('.page-header');
var popup = document.querySelector('.modal-link-js');
var modal = document.querySelector('.modal');
var close = document.querySelector('.modal__button');

header.classList.remove('page-header--nojs');

burger.addEventListener('click', function () {
  header.classList.toggle('page-header--opened');
})

popup.addEventListener('click', function () {
  modal.classList.toggle('modal--show');
})

close.addEventListener('click', function () {
  modal.classList.remove('modal--show');
})
