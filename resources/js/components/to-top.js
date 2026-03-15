window.addEventListener('load', () => {
    const toTopButtons = document.querySelectorAll('to-top');

    toTopButtons.forEach((button) => {
        button.addEventListener(('click'), () => {
            window.scroll({
                top: 0, behavior: 'smooth'
            });
        });
    });
});