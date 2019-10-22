<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                @if (Route::has('login'))

                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth

                @endif
                <a href="{{url('/admin')}}">Admin</a>
            </div>

            <div class="content">
                <table class="">

                </table>
            </div>
        </div>
    </body>
</html>
