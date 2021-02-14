const burgerMenu = () => {
    const burger = document.querySelector('#burger');
    const menu = document.querySelector('#menu');
    burger.addEventListener('click', (e) => {
        menu.classList.toggle('is-visible');
        burger.setAttribute('aria-expanded', !burger.getAttribute('aria-expanded'));
    })
};

burgerMenu();

const popup = () => {
    const popups = document.querySelectorAll('.popup');
    const body = document.querySelector('body');
    popups.forEach((popup) => {
        const open = popup.querySelector('.popup-open');
        const panel = popup.querySelector(`#${open.getAttribute('aria-controls')}`); 
        const close = popup.querySelector('.popup-close');
        open.addEventListener('click', () => {
            panel.classList.remove('hidden');
            body.classList.add('overflow-y-hidden');
        });
        close.addEventListener('click', () => {
            panel.classList.add('hidden');
            body.classList.remove('overflow-y-hidden');
        });
    });
}

popup();

window.onscroll = function() {navbarOnScroll()};

const navbarOnScroll = () => {
    const menu = document.getElementById('menu');
    const main = document.getElementById('main');
    if (main.getBoundingClientRect().top < 1) {
        menu.classList.add('is-scrolled');
    } else {
        menu.classList.remove('is-scrolled');
    }
}

const currentLink = () => {
    const hashLinks = document.querySelectorAll('.hash-link');
    const urlHash = location.hash;
    hashLinks.forEach((link) => {
        if (urlHash) {
            if (link.dataset.target === urlHash) {
                link.classList.add('is-current');
            } else {
                link.classList.remove('is-current');
            }
        }
        link.querySelector('a').addEventListener('click', (e) => {
            hashLinks.forEach((l) => (l.classList.remove('is-current')))
            link.classList.add('is-current');
            
        })
    });
}

currentLink();