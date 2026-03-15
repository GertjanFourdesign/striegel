@extends('layouts.master')

@section('title', $post->title)

@section('content')

    @component('sections.section-small')
        <p>{{ $post->getDate() }}</p>
        <h1>{{ $post->title }}</h1>

        @if($post->image)
            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
        @endif
        
        {{-- {!! Advoor\NovaEditorJs\NovaEditorJs::generateHtmlOutput(json_decode($post->content)) !!} --}}
    @endcomponent

    @include('sections.section-preview')

@stop
