var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });


  var scroll = new SmoothScroll('a[href*="#"]');