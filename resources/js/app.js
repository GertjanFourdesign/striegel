import "./components/mobile-menu.js";
import "./components/header";
import "./components/to-top";
import "./components/into-view";
import "./components/faq";
import "./components/splider";

import Slider from "./objects/slider.js";

window.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.slider');

    if (sliders.length > 0) {
        sliders.forEach((slider) => {
            const object = new Slider(slider);
            object.init();
        });
    }
});