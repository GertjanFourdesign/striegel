@if ($content["attributes"]->overview == 'call_to_action')
    @include('sections.section-conversion')
@elseif ($content["attributes"]->overview == 'news_preview')
    @php
        $previews = App\Models\Post::orderBy('id', 'desc')->take(3)->get();
    @endphp
    @include('sections.section-preview')
@endif
