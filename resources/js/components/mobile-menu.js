window.addEventListener('load', () => {
    let hamburger = document.querySelector('.hamburger');
    let mobileMenu = document.querySelector('.mobile-menu');
    let header = document.querySelector('.header');

    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('-active');
        mobileMenu.classList.toggle('-active');
        header.classList.toggle('-active');
    });
});
