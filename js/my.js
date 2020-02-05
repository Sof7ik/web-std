var swiperOne = new Swiper('.swiper-container-our', 
{
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  pagination: 
  {
    el: '.swiper-pagination',
    clickable: true,
  },
});


var swiperTwo = new Swiper('.swiper-container', 
{
  navigation: 
  {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var scroll = new SmoothScroll('a[href*="#"]');

var arrowDown = document.querySelector('.arrow-up');
var header = document.querySelector('#header');

var burger  = document.querySelector('.hide-unhide');
var nav = document.querySelector('nav');
var navMobile = document.querySelector('.navMobile');
var closeNavMobile  = document.querySelector('.closeNavMobile');

burger.addEventListener('click', () =>
{
  if (nav.style.display == 'flex')
  {
    nav.style.display = 'none';
    navMobile.style.display = 'flex';
    closeNavMobile.style.display = 'none';
    document.body.style.overflow = 'scroll';
  }
  else
  {
    closeNavMobile.style.display = 'flex';
    nav.style.display = 'flex';
    navMobile.style.display = 'none';
    document.body.style.overflow = 'hidden';
  }
});

closeNavMobile.addEventListener('click', () =>
{
  document.body.style.overflow = 'scroll';
  nav.style.display = 'none';
  navMobile.style.display = 'flex';
  closeNavMobile.style.display = 'none';
});

document.addEventListener('scroll', () =>
{
  if (window.scrollY > header.offsetWidth / 2)
  {
    arrowDown.style.visibility = 'visible';
  }
  else
  {
    arrowDown.style.visibility = 'hidden';
  }
});