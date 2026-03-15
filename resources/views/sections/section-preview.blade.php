@component('sections.section', [
    'class' => '--preview'
])

    <div class="part-12 -justify-between">
        <h2>Meer lezen?</h2>
        <a href="{{ route('nieuws') }}" class="button">Terug naar nieuws</a>
    </div>

    <div class="part-12">
        <div class="overview">
            @foreach($previews as $post)
                @include('components.overview-item', [
                    'class' => 'item',
                    'image' => Storage::url($post->overview_image),
                    'date' => $post->getDate(),
                    'title' => $post->title,
                    'slug' => route('post', [
                        $post->slug,
                    ]),
                ])
            @endforeach
        </div>
    </div>
@endcomponent
