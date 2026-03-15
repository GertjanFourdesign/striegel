@extends('layouts.master')

@section('title', 'Vacatures')

@section('content')

    @component('sections.section', [
        'class' => ''
    ])
        <div class="part-12">
            <h1>Vacatures</h1>
        </div>
        <div class="part-12 news">
            <div class="overview">
                @foreach($posts as $post)
                    @include('components.overview-item', [
                        'class' => 'item',
                        'subtitle' => $post->hours,
                        'title' => $post->title,
                        'slug' => route('vacature', [
                            $post->slug,
                        ]),
                    ])
                @endforeach
            </div>
        </div>
    @endcomponent

    @include('sections.section-conversion')

@endsection
