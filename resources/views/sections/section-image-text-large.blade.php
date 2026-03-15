@php
    $class = isset($class) ? $class : '';
    $reversed = isset($reversed) ? '--reversed' : '';
@endphp

@component('sections.section', [
    'class' => '--image-text --image-text-large ' . $class . ' ' . $reversed
])
    <div class="part-5 part-l-12 text">
        {{ $slot }}
    </div>
    <div class="part-6 part-l-12 images">
        @include('components.slider', [
            'images' => $images
        ])
    </div>
@endcomponent