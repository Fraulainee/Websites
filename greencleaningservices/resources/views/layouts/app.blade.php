<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <script src="https://kit.fontawesome.com/f470ada3a0.js" crossorigin="anonymous"></script> --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name')}}</title>
    </head>
    <body>      
        @include('inc.navbar')
        <br>
        @yield('content')
    </body>
</html>