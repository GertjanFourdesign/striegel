<section class="section --image">
    @isset($image)
        <img src="{{ $image }}" alt="">
    @endisset
    @isset($images)
        @include('components.slider', [
            'images' => $images
        ])
    @endisset
    @isset($video)
        <video autoplay muted playsinline="true" controls loop>
            <source src="{{ $video }}">
        </video>
    @endisset
</section>