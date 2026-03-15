import Splide from '@splidejs/splide';

window.addEventListener("load", () => {

    const spliderLoaders = document.querySelectorAll('.splide:not(.carousel)');
  
    if (spliderLoaders.length > 0) {
  
      	spliderLoaders.forEach((spliderLoader) => {
			const splider = new Splide( spliderLoader, {
				type        : 'loop',
				pagination  : false,
				autoplay    : true,
				interval    : 3000,
			
				arrows      : 'splide__arrows slider__controls',
				arrow       : 'splide__arrow slider__control',
			});
			
			// splider.on( 'mounted move', function () {
			// 	const bar = splider.root.querySelector('.splide__control-bar');
			// 	const end = splider.Components.Controller.getEnd() + 1;
			// 	bar.style.width = String( 100 * ( splider.index + 1 ) / end ) + '%';
			// });
			
			splider.mount();
	
		});
	}

	const carousels = document.querySelectorAll('.splide.carousel');

	if (carousels.length > 0) {
		carousels.forEach((carousel) => {
			new Splide( carousel, {
				// type        : 'loop',
				pagination  : false,
				autoplay    : true,
				drag        : true,
				perPage     : 2,
				gap         : 16,
				arrows      : false,
			}).mount();
		});
	}
});