@component('sections.section', [
    'class' => '--carousel',
    'id' => $id ?? ''
])
    <div class="part-1 part-s-12"></div>
    <div class="part-8 part-l-10 part-s-12">
        {{ $slot }}
    </div>
    <div class="part-3 part-l-1 part-s-0"></div>
    <div class="part-1 part-l-0"></div>
    <div class="part-11 part-l-12">
        @include('components.carousel', [
            'images' => $images ?? ''
        ])
    </div>
@endcomponent