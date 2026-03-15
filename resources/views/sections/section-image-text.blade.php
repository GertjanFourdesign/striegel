@component('sections.section', [
    'class' => isset($reversed) && $reversed ? "--reversed --image-text" : "--image-text"
])
    <div class="part-6 part-s-12">
        @if(isset($video) && $video != '')
            <video autoplay muted no-controls playsinline="true" loop>
                <source src="{{ $video }}">
            </video>
        @else
            <img src="{{ $image }}" alt="">
        @endisset
    </div>
    <div class="part-5 part-s-12 text">
        {{ $slot }}
    </div>
@endcomponent