let burger = document.querySelector('.header-mobile');
let menu = document.querySelector('.mobile-nav');


burger.addEventListener('click', () => {
    menu.classList.add('mobile-nav-active');
});

let closeBtn = document.querySelector('.mobile-nav-close');

closeBtn.addEventListener('click', () => {
    menu.classList.remove('mobile-nav-active')
});


let openCountries = document.querySelector('#open-countries');
let openMore = document.querySelector('#open-more');
let countries = document.querySelector('#countries');
let more = document.querySelector('#more');


openCountries.addEventListener('click', () => {
    if (countries.style.display == 'block') {
        countries.style.display = 'none';
    } else {
        countries.style.display = 'block';
    }
})

openMore.addEventListener('click', () => {
    if (more.style.display == 'block') {
        more.style.display = 'none';
    } else {
        more.style.display = 'block';
    }
})

let consultationBtn = document.querySelectorAll('.question');
let popap = document.querySelector('.form-popup');
let formClose = document.querySelector('.form-xmark');

consultationBtn.forEach((button) => {
    button.addEventListener('click', () => {
        popap.classList.add('active');
    })
});

formClose.addEventListener('click', () => {
    popap.classList.remove('active')
});