@component('sections.section', [
    'class' => '--conversion'
])
    <div class="part-12">
        <div class="block">
            <h2>{{ nova_get_setting('cta_title') }}</h2>
            <p>{!! nova_get_setting('cta_text') !!}</p>
            <a href="{{ route('contact') }}" class="button -bordered">
                Lees meer
            </a>
        </div>
    </div>
@endcomponent
