@php
    $titles = config('portfolio.titles');
    $photo = config('portfolio.profile_image');
    $hasPhoto = $photo && file_exists(public_path($photo));
    $cv = config('portfolio.cv');
    $hasCv = $cv && file_exists(public_path($cv));
@endphp

<section id="home" class="hero">
    <div class="hero__glow" aria-hidden="true"></div>

    <div class="container hero__grid">
        <div class="hero__content">
            <p class="hero__eyebrow">HELLO, I'M</p>
            <h1 class="hero__name">{{ config('portfolio.name') }}<span class="accent">.</span></h1>

            <p class="hero__role" aria-label="{{ implode(', ', $titles) }}">
                <span id="typed" data-titles="{{ json_encode($titles) }}">{{ $titles[0] }}</span>
            </p>

            <p class="hero__text">
                I'm a BSIT student passionate about web development, programming, and creating useful digital solutions.
                I enjoy learning new technologies and turning ideas into functional applications.
            </p>

            <div class="hero__actions">
                <a href="#projects" class="btn"><i class="fa-solid fa-code"></i> View My Projects</a>
                <a href="#contact" class="btn btn--outline"><i class="fa-regular fa-envelope"></i> Contact Me</a>
                @if ($hasCv)
                    <a href="{{ asset($cv) }}" class="btn btn--ghost" download><i class="fa-solid fa-download"></i> Download CV</a>
                @else
                    <span class="btn btn--ghost is-disabled" role="link" aria-disabled="true" title="CV coming soon">
                        <i class="fa-solid fa-download"></i> Download CV
                    </span>
                @endif
            </div>
        </div>

        <div class="hero__visual">
            <span class="orbit orbit--1" aria-hidden="true"></span>
            <span class="orbit orbit--2" aria-hidden="true"></span>
            <div class="avatar">
                @if ($hasPhoto)
                    <img src="{{ asset($photo) }}" alt="Portrait of {{ config('portfolio.name') }}">
                @else
                    <div class="avatar__placeholder" role="img" aria-label="Profile picture placeholder">
                        <i class="fa-solid fa-user"></i>
                        <span>Your photo here</span>
                    </div>
                @endif
            </div>
            <span class="chip chip--1" aria-hidden="true"><i class="fa-brands fa-laravel"></i></span>
            <span class="chip chip--2" aria-hidden="true"><i class="fa-brands fa-php"></i></span>
            <span class="chip chip--3" aria-hidden="true"><i class="fa-solid fa-database"></i></span>
        </div>
    </div>
</section>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
@endpush
