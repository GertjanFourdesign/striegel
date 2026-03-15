@include('partials.menu-item', [
    'title' => 'Home',
    'route' => 'home',
])

@include('partials.menu-item', [
    'title' => 'FAQ',
    'route' => 'faq',
    'submenu' => [[
        'title' => 'Submenu pagina', 
        'route' => 'home'
    ]]
])

@include('partials.menu-item', [
    'title' => 'Nieuws',
    'route' => 'nieuws',
])

@include('partials.menu-item', [
    'title' => 'Vacatures',
    'route' => 'vacatures',
])

@include('partials.menu-item', [
    'title' => 'Contact',
    'route' => 'contact',
])