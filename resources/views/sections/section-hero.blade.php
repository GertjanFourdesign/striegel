@component('sections.section', [
    'class' => '--hero',
])
    <div class="part-12 -text-center">
        {!! $slot !!}
    </div>
    @if(isset($image))
        <div class="part-12">
            <img src="{{ Storage::url($image) }}" alt="" class="image">
        </div>
    @endif
@endcomponent
