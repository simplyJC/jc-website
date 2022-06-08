const nav = document.querySelector('.nav');
const menuBtn = document.querySelector('.nav__menu');

menuBtn.addEventListener('click', () => {
  nav.classList.toggle('nav--show');
});

window.addEventListener('resize', () => {
  let viewportWidth = window.innerWidth;
  if (viewportWidth >= 500) {
    nav.classList.remove('nav--show');
  }

});
