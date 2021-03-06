<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mystery+Quest&display=swap" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        @if (Auth::check() && Auth::user()->is_activated)
            @include('includes.admin')
            <div style="height: 60px"></div>
        @endif

        @include('includes.header')

        @if (Route::current()->getName() == 'home') 
            @include('includes.logo_home')
            @include('includes.nav')
        @endif

        @if (Route::current()->getName() !== 'home') 
            @include('includes.logo_posts')
        @endif

        <div class="d-block d-md-none" style="height: 2px; background-color:#333;"></div>

        <main>
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
</body>
</html>
