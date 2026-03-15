<div class="menu__item {{ isset($submenu) ? '-has-submenu' : '' }}">
    <a 
        href="{{ route($route) }}" 
        class="{{ $class ?? '' }}__item 
            {{ str_contains(Request::url(), $route) ||  
            Route::currentRouteName() == $route ? '-active' : '' }} 
        ">
        {{ $title }}
        @if(isset($submenu) && $submenu)
            @include('icons.arrow-down', [
                'class' => 'submenu__icon'
            ])
        @endif
    </a>
    {{ isset($slot) ? $slot : '' }}

    @if(isset($submenu) && $submenu)
        <div class="submenu">
            @foreach($submenu as $item)
                @include('partials.menu-item', [
                    'title' => $item['title'],
                    'route' => $item['route'],
                    'submenu' => false,
                ])
            @endforeach
        </div>
    @endif
</div>