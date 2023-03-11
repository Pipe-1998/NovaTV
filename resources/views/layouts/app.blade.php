<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Scripts -->
    <link href= "{{ asset('css/app.css')}}" rel="stylesheet">
    <link href= "{{ asset('css/custom.css')}}" rel="stylesheet">
    <link href= "{{ asset('css/fontawesome.css')}}" rel="stylesheet">
    <link href= "{{ asset('css/owl.carosel.css')}}" rel="stylesheet">
    <link href= "{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @include(layouts.navbar)
        <main class="py-4">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--Scripts-->
    <script src="{{asset('js/sweetaler2@11.js')}}"></sacrip>
    <script src="{{asset('js/jquery..js')}}"></sacrip>
    <script src="{{asset('js/owl.carosel.min.js')}}"></sacrip>

    
    
</body>
</html>
