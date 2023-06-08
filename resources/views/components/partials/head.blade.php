<div>
    @livewireStyles
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

{{--    styles--}}
    @stack('stylesheet')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>
{{--        {{isset($title) ? config('app.name') . '|' . $title : ' '}}--}}
        {{isset($title) ?  $title : ' '}}
    </title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
</div>
