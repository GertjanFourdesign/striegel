<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Website</title>
        <link rel="icon" type="image/png" href="/img/favicon.png">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>

    <body>
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </body>

</html>
