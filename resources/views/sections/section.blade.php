<section
    id="{{ $id ?? '' }}"
    class="section
    {{ $class ?? '' }}
    {{ $wide ?? false ? "--wide" : '' }}
    {{ $color ?? false ? "--colored -color-" . $color : '' }}"
>
    <div class="container">
        {{ $slot }}
    </div>
</section>
