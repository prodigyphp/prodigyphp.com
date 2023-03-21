<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-padding-top:7rem;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('images/favicon.svg')) }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/prism.js'])
    @livewireStyles
    @livewireScripts
    @yield('pro_head')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="/vendor/prodigy/js/codemirror.js" defer></script>

</head>

<body class="font-sans">
@yield('body')
</body>
</html>
