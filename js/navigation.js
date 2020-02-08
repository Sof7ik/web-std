var arrowDown = document.querySelector('.arrow-up');
var header = document.querySelector('#header');
var burger = document.querySelector('.hide-unhide');
var nav = document.querySelector('nav');
var navMobile = document.querySelector('.navMobile');
var closeNavMobile = document.querySelector('.closeNavMobile');

burger.addEventListener('click', function () 
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

closeNavMobile.addEventListener('click', function () 
{
  document.body.style.overflow = 'scroll';
  nav.style.display = 'none';
  navMobile.style.display = 'flex';
  closeNavMobile.style.display = 'none';
});

document.addEventListener('scroll', function () 
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