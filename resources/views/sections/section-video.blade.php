<section class="section --horizontal-center --video {{ $class ?? '' }}" id="{{ $id ?? '' }}">
    <div class="container">
        @if (isset($title) && $title)
            <div class="part-6 -text-center">
                <h2 class="section__title">{!! $title !!}</h2>
            </div>
        @endif
        <div class="part-12">
            @include('components.video', [
                'poster' => $poster ?? '',
                'videoUrl' => $video,
                'description' => $description ?? null,
            ])
        </div>
    </div>
</section>
