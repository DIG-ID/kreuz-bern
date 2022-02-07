import Swiper from "swiper/swiper-bundle.min.js";

function swiper($selector, $options) {
  return new Swiper($selector, $options);
}

var mySwiper = new Swiper('.swiper-container-rooms', {
  direction: 'horizontal',
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var historySwiper = new Swiper('.swiper-container-history', {
  direction: 'horizontal',
  slidesPerView: 1,
  loop: true,
  speed: 600,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

