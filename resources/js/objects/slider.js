export default class Slider {

    /**
     * @param   {Element} element
     */
    constructor(element) {
        /**
         * @type {Element}
         * @private
         */
        this._container = element;

        /**
         * @type {NodeListOf<Element>}
         */
        this._slide = this._container.querySelectorAll('.slider__slide');

        /**
         * @type {number}
         */
        this.index = 0;

        /**
         * @type {Element | any}
         * @private
         */
        this._controls = this._container.querySelector('.slider__controls');

        /**
         * @type {Element | any}
         * @private
         */
        this._prev = this._container.querySelector('.slider__control.-left');

        /**
         * @type {Element | any}
         * @private
         */
        this._next = this._container.querySelector('.slider__control.-right');
    }

    init() {

        this._slide[this.index].classList.add('-active');

        if (this._slide.length > 1 && this._controls) {
            this._controls.classList.add('-active');
        }

        const self = this;

        if (this._next) {
            this._next.addEventListener('click', () => {
                self.slide('next');
            });
        }

        if (this._prev) {
            this._prev.addEventListener('click', () => {
                self.slide('prev');
            });
        }

        setInterval(function () {
            self.slide('next');
        }, 5000);
    }

    slide(direction) {

        this._slide[this.index].classList.remove('-active');

        if (direction === 'next') {

            this.index = this.index + 1;

            if (this.index >= this._slide.length) {
                this.index = 0;
            }

        } else if (direction === 'prev') {

            this.index = this.index - 1;

            if (this.index < 0) {
                this.index = this._slide.length - 1;
            }
        }

        this._slide[this.index].classList.add('-active');
    }
}
