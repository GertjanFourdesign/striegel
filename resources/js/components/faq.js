window.addEventListener('load', () => {
    const faqItems = document.querySelectorAll('.faq__item');

    faqItems.forEach((faqItem) => {
        let faqQuestion = faqItem.querySelector('.faq__question');
        faqQuestion.addEventListener('click', () => {
            faqItem.classList.toggle('-active');
        });
    });
});