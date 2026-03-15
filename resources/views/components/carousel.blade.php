<div class="splide carousel">
    {{-- <div class="slider__controls splide__arrows"></div> --}}
    <div class="splide__track">
        <div class="splide__list">
            @foreach($images as $image)
                <div class="splide__slide">
                    <img src="{{ $image->url }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>
