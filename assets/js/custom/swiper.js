import Swiper, { Navigation } from 'swiper';

Swiper.use([Navigation]);

var mySwiper = new Swiper('.swiper-container-rooms', {
  direction: 'horizontal',
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
