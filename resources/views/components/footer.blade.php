@php($social = config('portfolio.social'))
<footer class="footer">
    <div class="container footer__inner">
        <div class="footer__brand">
            <a href="#home" class="logo">{{ config('portfolio.logo') }}</a>
            <p>{{ config('portfolio.name') }}</p>
        </div>

        <ul class="footer__links">
            @foreach (config('portfolio.nav') as $item)
                <li><a href="#{{ $item['id'] }}">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>

        <div class="social">
            <a href="{{ $social['github'] ?? '#contact' }}" aria-label="GitHub"
               @if ($social['github']) target="_blank" rel="noopener noreferrer" @else title="GitHub link coming soon" @endif>
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="{{ $social['linkedin'] ?? '#contact' }}" aria-label="LinkedIn"
               @if ($social['linkedin']) target="_blank" rel="noopener noreferrer" @else title="LinkedIn link coming soon" @endif>
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>
    </div>
    <p class="footer__copy">&copy; {{ date('Y') }} {{ config('portfolio.name') }}. All Rights Reserved.</p>
</footer>
