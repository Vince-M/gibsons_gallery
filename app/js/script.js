console.log('Hello');

const main = document.querySelector('#main');
const body = document.querySelector('body');
const footer = document.querySelector('#footer');
const btnOpen = document.querySelector('#btnOpen');
const btnClose = document.querySelector('#btnClose');
const menuTopNav = document.querySelector('#menuTopNav');
const overlay = document.querySelector('#overlay');
const breakpoint = window.matchMedia('(width < 43.75em)');
const menu = document.querySelector(".menu");
const nav__items = document.querySelectorAll(".nav__item");
const btnHamburger = document.querySelector('#btnHamburger');
const faders = document.querySelectorAll('.fade-in');

const setupTopNav = () => {
    if (breakpoint.matches) {
    // console.log('is mobile');
    menuTopNav.setAttribute('inert', '');
  } else {
    // console.log('is tablet/desktop');
    closeMobileMenu();
    menuTopNav.removeAttribute('inert');
  }
}

// setupTopNav();

btnOpen.addEventListener('click', openMobileMenu);
btnClose.addEventListener('click', closeMobileMenu);

breakpoint.addEventListener('change', () => {
//  console.log('breakpoint crossed');
 setupTopNav();
});

function openMobileMenu() {
  // console.log('run openMobileMenu');
  btnOpen.setAttribute('aria-expanded', 'true');
  main.setAttribute('inert', '');
  footer.setAttribute('inert', '');
  menuTopNav.removeAttribute('inert');
  menuTopNav.style.transitionDuration = '400ms';
  overlay.style.transitionDuration = '400ms';
  bodyScrollLock.disableBodyScroll(menuTopNav);
  btnClose.focus();
}

function closeMobileMenu() {
  // console.log('run closeMobileMenu');
  btnOpen.setAttribute('aria-expanded', 'false');
  main.removeAttribute('inert');
  footer.removeAttribute('inert');
  menuTopNav.setAttribute('inert', '');
  bodyScrollLock.enableBodyScroll(menuTopNav);
  btnOpen.focus();
  
  setTimeout(() => {
    menuTopNav.removeAttribute('style');
    overlay.removeAttribute('style');
  }, 500);
}



// Intersection Observer

const appearOptions = {
  threshold: 1,
  rootMargin: "0px 0px 100px 0px"
  // rootMargin: "0px 0px -100px 0px"
};

const appearOnScroll = new IntersectionObserver (function(
    entries, 
    appearOnScroll
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add('appear');
      appearOnScroll.unobserve(entry.target);
    }
  });
}, 
appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});