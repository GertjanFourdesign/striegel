<header class="header">
    
    @include('partials.mobile-menu')
    
    <div class="container">
        <div class="part-4 part-l-8">
            <a href="{{ route("home") }}" 
                class="header__logo">
                @include('partials.logo')
            </a>
        </div>
        <div class="part-8 part-l-4 header__part">
            <nav class="header__nav">
                @include('partials.main-menu', [
                    'class' => 'header'
                ])
            </nav>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
