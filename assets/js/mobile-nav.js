// DOM elements
const menuContainerEL = document.querySelector('.hamburger-menu');
const menuBarTopEl = document.querySelector('.menu-bar-top');
const menuBarBottomEl = document.querySelector('.menu-bar-bottom');
const navEl = document.querySelector('.nav-mobile');
const navLinksEl = document.querySelectorAll('.nav-mobile-link-container');
const navIconEl = document.querySelector('.nav-mobile-footer-icon-container');

// Open or close hamburger menu
menuContainerEL.addEventListener('click', (e) => {
  const isOpen = JSON.parse(menuContainerEL.getAttribute('aria-expanded'));
  isOpen ? closeNav() : openNav();
  menuContainerEL.setAttribute('aria-expanded', !isOpen);
});

// Open nav drawer
const openNav = () => {
  navEl.style.display = 'flex';

  const timeline = gsap.timeline();

  timeline
    .to(navEl, {
      yPercent: 0,
      opacity: 1,
      duration: 0.25,
      ease: 'power1.out',
    })
    .to(
      menuContainerEL,
      {
        backgroundColor: '#F17122',
        duration: 0.35,
        ease: 'power1.out',
      },
      '<'
    )
    .to(
      menuBarTopEl,
      {
        width: '36px',
        y: '4px',
        rotation: -45,
        duration: 0.35,
        ease: 'power1.out',
      },
      '<'
    )
    .to(
      menuBarBottomEl,
      {
        rotation: 45,
        y: '-4px',
        duration: 0.35,
        ease: 'power1.out',
      },
      '<'
    )
    .to(navLinksEl, {
      opacity: 1,
      x: 0,
      duration: 0.35,
      stagger: 0.15,
      ease: 'power1.out',
    })
    .to(navIconEl, {
      opacity: 1,
      duration: 0.35,
      ease: 'power1.out',
    });
};

// Close nav drawer
const closeNav = () => {
  const timeline = gsap.timeline();

  timeline
    .to(navIconEl, {
      opacity: 0,
      duration: 0.15,
      ease: 'power1.out',
    })
    .to(navLinksEl, {
      opacity: 0,
      x: '2.5rem',
      duration: 0.15,
      stagger: 0.05,
      ease: 'power1.out',
    })
    .to(menuBarBottomEl, {
      rotation: 0,
      y: 0,
      duration: 0.15,
      ease: 'power1.out',
    })
    .to(
      menuBarTopEl,
      {
        width: '32px',
        y: 0,
        rotation: 0,
        duration: 0.15,
        ease: 'power1.out',
      },
      '<'
    )
    .to(menuContainerEL, {
      backgroundColor: '#0B1013',
      duration: 0.15,
      ease: 'power1.out',
    })
    .to(
      navEl,
      {
        yPercent: 100,
        opacity: 0,
        duration: 0.5,
        ease: 'power1.out',
      },
      '<'
    );

  setTimeout(() => { navEl.style.display = 'none' }, 1000);
};
