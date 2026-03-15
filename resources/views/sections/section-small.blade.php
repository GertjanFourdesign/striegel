<section class="section --small {{ $class ?? '' }}" id={{ $id ?? '' }}>
    <div class="container">
        <div class="part-2 part-xl-1 part-s-0"></div>
        <div class="part-8 part-xl-10 part-s-12">
            {{ $slot }}
        </div>
        <div class="part-2 part-xl-1 part-s-0"></div>
    </div>
</section>
