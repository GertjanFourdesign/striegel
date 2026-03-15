@extends('layouts.master')

@section('title', $post->meta_title ?? $post->title)
@section('description', $post->meta_title ?? $post->title)

@section('content')

    @component('sections.section', [
        'class' => '--conversion'
    ])
        <div class="part-12">
            <h2>{{ $post->title }}</h2>
            <p>
                {{ $post->hours }}
                <br>
                {{ $post->education }}
            </p>
        </div>
    @endcomponent

    @foreach ($post->content as $content)
        @includeIf('components.page-preset.' . $content['layout'], 
            ['content' => $content])
    @endforeach

@stop
