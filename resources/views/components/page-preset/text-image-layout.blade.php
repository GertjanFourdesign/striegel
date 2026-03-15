@if (!$content["attributes"]["large_image"])
    
    @component('sections.section-image-text', [
        'image' => $content['attributes']['images'],
        'reversed' => $content["attributes"]->reversed ?? false,
    ])
        @isset($content["attributes"]["text"])
            {!! $content["attributes"]["text"] !!}
        @endisset
        @isset($content["attributes"]["buttons"])
            @include('components.page-preset.text-image-layout-buttons', [
                'buttons' => $buttons = $content["attributes"]["buttons"],
            ])
        @endisset
    @endcomponent

@else

    @component('sections.section-image-text-large', [
        'class' => "--no-top-space",
        'images' => array($content['attributes']['images']),
    ])
        @isset($content["attributes"]["text"])
            {!! $content["attributes"]["text"] !!}
        @endisset
        @isset($content["attributes"]["buttons"])
            @include('components.page-preset.text-image-layout-buttons', [
                'buttons' => $buttons = $content["attributes"]["buttons"],
            ])
        @endisset
    @endcomponent

@endif
