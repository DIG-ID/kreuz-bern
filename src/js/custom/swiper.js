import Swiper from 'swiper/bundle';

function swiper($selector, $options) {
  return new Swiper($selector, $options);
}

$(function() {
  var mySwiper = new Swiper('.swiper-container-rooms', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    speed: 600,
    centeredSlides: true,
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
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  var singleRoomSwiper = new Swiper('.swiper-container-single-room', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    speed: 600,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
});
