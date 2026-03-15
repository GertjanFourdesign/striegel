<div class="slider {{$class ?? ''}}">
    <div class="slider__inner">
        @foreach($images as $image)
            @php
                if(isset($image->id)) :
                    $image = Storage::url($image->id . '/' . $image->file_name);
                endif;
            @endphp
            <div
                class="slider__slide"
                style='background-image: url("{{ $image }}")'
            ></div>
        @endforeach
    </div>
    <div class="slider__controls">
        @if($arrows ?? true)
            <div class="slider__control -left"></div>
            <div class="slider__control -right"></div>
        @else
            @foreach($images as $image)
                <div class="slider__control"></div>
            @endforeach
        @endif
    </div>
</div>
