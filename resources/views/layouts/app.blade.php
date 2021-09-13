<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <meta name="turbolinks-cache-control" content="no-cache">--}}
    <title>
        @stack('pageTitle', 'Twinbit')
    </title>
    <link rel="shortcut icon" href="{{asset('favicon.jpg')}}"/>
    @yield('link')
    <link href="{{asset('Vendor/css/bootstrap5.css')}}" rel="stylesheet">
    @livewireStyles
    {{--  custome css  --}}
    @yield('script')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('Vendor/js/bootstrap5.js')}}"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
            data-turbolinks-eval="false" data-turbo-eval="false"></script>
</head>
<body>
{{--@livewire('partial.navbar')--}}
@include('partial.nav')

@yield('content')

</body>
</html>
