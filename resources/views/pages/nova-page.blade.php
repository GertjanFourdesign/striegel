@extends('layouts.master')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_title ?? $page->title)

@section('content')

    @foreach ($page->content as $content)
        @includeIf('components.page-preset.' . $content['layout'], 
            ['content' => $content])
    @endforeach

@stop
