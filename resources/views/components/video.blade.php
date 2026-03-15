<div class="video {{ isset($autoplay) ? '-autoplay' : '' }}">
    <div class="video__container">
        <video class="video__source" no-controls poster="{{ $poster }}" {{ isset($autoplay) ? 'autoplay muted loop ' : '' }}>
            <source fetchpriority="high" rel="preload" src="{{ $videoUrl }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video__control button">
            {{ __('t.play-movie') }}
            <div class="button__icon">
                @include('icons.play')
            </div>
        </div>
    </div>
    @if(isset($description) && $description)
        <div class="video__description">
            <h6>{{ $description }}</h6>
        </div>
    @endif
</div>