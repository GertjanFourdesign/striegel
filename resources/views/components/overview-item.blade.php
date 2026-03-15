<div
    class="overview__item item {{ $class ?? '' }}"
    onClick="{{ isset($slug) ? 'window.location = "' . $slug . '"'  : ''}}"
>
    @isset($image)
        <div class="item__image">
            <img src="{{ $image }}" alt="">
        </div>
    @endisset

    <div class="item__content">

        @isset($subtitle)
            <h6 class="item__subtitle">
                {{ $subtitle ?? '' }}
            </h6>
        @endisset

        <h4 class="item__title" 
            onClick="window.location = '{{ $slug ?? ''}}'">
            {{ $title ?? '' }}
        </h4>

        @isset($preview)
            <p class="item__preview">
                {{ $preview }}
            </p>
        @endisset

        @isset($slug)
            <a class="button" href="{{ $slug ?? ''}}">
                {{ $buttonText ?? 'Lees bericht' }}
            </a>
        @endisset

    </div>
</div>
