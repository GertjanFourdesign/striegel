@extends('layouts.master')

@section('title', 'Home')

@section('content')

    @component('sections.section-hero', [
    ])
        <h1>Welkom</h1>
        <p>Dit is een voorbeeldpagina</p>
    @endcomponent

    @component('sections.section-image-text', [
        'image' => '/img/placeholder.jpg',
    ])
        <h2>Tekst met afbeelding</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
    @endcomponent
    
    @component('sections.section-image-text', [
        'image' => '/img/placeholder.jpg',
        'reversed' => true,
    ])
        <h2>Tekst met afbeelding omgekeerd</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
    @endcomponent

    @include('sections.section-conversion')

@stop
