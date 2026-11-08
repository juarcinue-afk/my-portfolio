<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('portfolio.name').' | Portfolio')</title>
    <meta name="description" content="Personal portfolio of {{ config('portfolio.name') }}, BSIT student and aspiring web developer.">
    <meta name="theme-color" content="#080B09">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Sora:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>
    <div class="loader" id="loader" aria-hidden="true"><span class="loader__logo">{{ config('portfolio.logo') }}</span></div>

    <a class="skip-link" href="#main">Skip to content</a>

    <x-navbar />

    <main id="main">
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
