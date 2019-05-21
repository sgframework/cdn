<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SunbulahGroup') }}</title>
    <!-- Scripts -->
    <script src="{{asset('js/xterm.js')}}"></script>
</head>
    <body>
        @yield('content')
    </body>
</html>