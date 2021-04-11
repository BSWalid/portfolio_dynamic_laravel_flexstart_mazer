<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard admin showcase') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet ">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="row">
                    <a class="navbar-brand" href="#">Hello <span><b>{{Auth::user()->email}}</b><span></a>
            </div>

        </div>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger"> Logout

                    </button>
                </form>

    </nav>

    <x-side-bar>
    </x-side-bar>

        <div id="main">
        <div id="container">

            @yield('content')
        </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
        <script src="{{ asset('js/dashboard.js') }}" ></script>
</body>
</html>
