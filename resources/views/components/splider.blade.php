<div class="splide">
    <div class="splide__track">
      <div class="splide__list">
        @foreach($images as $image)
          <img class="splide__slide" src="{{ $image }}" alt="">
        @endforeach
      </div>
    </div>
    <div class="splide__controls">
      <div class="splide__arrows -prev slider__controls button">{{ __('t.previous') }}</div>
      <div class="splide__arrows -next slider__controls button">{{ __('t.next') }}</div>
    </div>
</div>
