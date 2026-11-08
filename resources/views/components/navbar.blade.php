<header class="navbar" id="navbar">
    <nav class="container navbar__inner" aria-label="Main navigation">
        <a href="#home" class="logo" aria-label="{{ config('portfolio.name') }} home">{{ config('portfolio.logo') }}</a>

        <button class="nav-toggle" id="navToggle" type="button"
                aria-label="Toggle menu" aria-expanded="false" aria-controls="navMenu">
            <span></span><span></span><span></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            @foreach (config('portfolio.nav') as $item)
                <li><a href="#{{ $item['id'] }}" class="nav-link" data-section="{{ $item['id'] }}">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
