window.addEventListener('load', function () {
    let header = document.querySelector('header');
    let scrollY = window.scrollY;
    let hamburger = document.querySelector('.hamburger');

    setInterval(() => {

        setTimeout(() => {

            if (!hamburger.classList.contains('-active')) {
                if (window.scrollY === 0) {
                    header.classList.remove('-scrolled');
                } else if (window.scrollY > scrollY) {
                    header.classList.add('-scrolled');
                } else {
                    header.classList.remove('-scrolled');
                }

                scrollY = window.scrollY;
            }
        }, 500);

    }, 500);
});