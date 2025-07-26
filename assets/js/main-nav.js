const bodyEl = document.querySelector('body');
const navEl = document.querySelector('.mobile-nav');
const menuEl = document.querySelector('.hamburger-menu');
const menuBarTopEl = document.querySelector('.menu-bar-top');
const menuBarMiddleEl = document.querySelector('.menu-bar-middle');
const menuBarBottomEl = document.querySelector('.menu-bar-bottom');

const openNav = () => {
    console.log("HI")
    navEl.style.display = 'flex';

    gsap.to('.mobile-nav', {
        duration: 0.3,
        opacity: 1
    });

    gsap.to('.menu-bar-top', {
        backgroundColor: '#0B1013'
    });

    gsap.to('.menu-bar-middle', {
        backgroundColor: '#0B1013'
    });

    gsap.to('.menu-bar-bottom', {
        backgroundColor: '#0B1013'
    });
}

const closeNav = () => {
    gsap.to('.mobile-nav', {
        duration: 0.3,
        opacity: 0
    });

    gsap.to('.menu-bar-top', {
        backgroundColor: '#F5FCFF'
    });

    gsap.to('.menu-bar-middle', {
        backgroundColor: '#F5FCFF'
    });

    gsap.to('.menu-bar-bottom', {
        backgroundColor: '#F5FCFF'
    });

    setTimeout(() => {
        navEl.style.display = 'none';
    }, 300);
}

document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger.ScrollSmoother);
});

menuEl.addEventListener('click', () => {
    console.log("HELO")
    const isOpen = JSON.parse(navEl.getAttribute('aria-expanded'));
    navEl.setAttribute('aria-expanded', !isOpen);
    isOpen ? closeNav() : openNav();
});