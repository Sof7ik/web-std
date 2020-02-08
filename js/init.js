var swiperOne = new Swiper('.swiper-container-our', 
{
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  pagination: 
  {
    el: '.swiper-pagination',
    clickable: true
  }
});

var swiperTwo = new Swiper('.swiper-container', 
{
  navigation: 
  {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});

var scroll = new SmoothScroll('a[href*="#"]');