@extends('layouts.master')

@section('title', 'Nieuws')

@section('content')

    @component('sections.section', [
        'class' => ''
    ])
        <div class="part-12">
            <h1>Nieuws</h1>
        </div>
        <div class="part-12 news">
            <div class="overview">
                @foreach($posts as $post)
                    @include('components.overview-item', [
                        'class' => 'item',
                        'image' => Storage::url($post->overview_image),
                        'subtitle' => $post->getDate(),
                        'title' => $post->title,
                        'slug' => route('post', [
                            $post->slug,
                        ]),
                    ])
                @endforeach
            </div>
        </div>
    @endcomponent

    @include('sections.section-conversion')

@endsection
