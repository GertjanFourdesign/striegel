@extends('layouts.master')

@section('content')

    <section class="section">
        <div class="container">
            <div class="part-12">
                <h1>404</h1>
                <p>Deze pagina bestaat niet (meer)</p>
                <a class="button" href="{{ route("home") }}">Terug naar Home</a>
            </div>
        </div>
    </section>

@stop
