window.addEventListener('load', () => {
    const fields = document.querySelectorAll(".line .container > div");

    intoView();

    document.addEventListener("scroll", function () {
        intoView();
    });

    function intoView() {
        fields.forEach(field => {

            let field_top_position = field.getBoundingClientRect().top - window.innerHeight;
            let field_bottom_position = field.getBoundingClientRect().bottom - window.innerHeight;

            if (field_top_position < -150 || field_bottom_position < 0) {
                field.classList.add("-into-view");
            }
        });
    }
});