@if($content["attributes"]["scroll_to"] || $buttons)
    <div class="buttons">
        @if($buttons)
            @foreach($buttons as $key => $button)
                <a href="{{ $key }}" class="button">
                    {{ $button }}
                </a>
            @endforeach
        @endif
        @if($content["attributes"]["scroll_to"])
            <a href="#scroll" id="scroll" class="link -down">
                Scroll voor meer
                <img src="/img/icons/arrow-down.svg" alt="">
            </a>
        @endif
    </div>
@endif