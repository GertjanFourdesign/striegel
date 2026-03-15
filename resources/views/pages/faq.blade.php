@extends('layouts.master')

@section('title', 'Faq')

@section('content')

    @component('sections.section', [
    ])
        <div class="part-12 faq">
            <h1>Veelgestelde vragen</h1>
        </div>
        @foreach($categories as $category)
            <div class="part-12 faq__category">
                <h3>{{ $category->name }}</h3>
                
                @foreach($category->faqs as $question)
                    <div class="faq__item">
                        <div class="faq__question">
                            <span>{{ $question->question }}</span>
                            <span class="faq__icon">
                                @include ('icons.arrow-down')
                            </span>
                        </div>
                        <p class="faq__answer">
                            {{ $question->answer }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endcomponent

@stop
