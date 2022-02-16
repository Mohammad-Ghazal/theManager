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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card {
            width: 800px;
            height: 600px;
            margin: 50px auto;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
            border-radius: 2px;
            background: #fff;
            display: flex;
            justify-content: space-between;
        }

        .left {
            width: 46%;
        }

        .img {
            position: relative;
            width: 100%;
            min-height: 500px;
        }

        img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        h1 {
            text-align: center;
            color: rgb(235, 136, 125);
            text-transform: capitalize;
        }

        .right {
            padding: 30px;
            width: 55%;
        }

        .container {
            margin-top: 50px;
        }

        input[type=email],
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #F1F1F1;
        }

        input[type=email]:focus,
        input[type=password]:focus,
        input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }

        button {
            background-color: rgb(235, 136, 125);
            color: white;
            padding: 14px 20px;
            margin: 30px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        @media (max-width: 1040px) {
            .left {
                display: none;
            }

            .card {
                width: 90%;
                margin: 30px auto;
            }

            .right {
                width: 90%;
                margin: 0 30px;
                font-size: 1em;
            }
        }

        ul {
            display: flex;
            list-style-type: none;

        }

        li {
            margin: 5%;
        }

        a {
            text-decoration: none;
        }

        ul {
            width: 100%;
        }
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color:#ddd;display: flex;
            justify-content:center;">
            <div class="container">



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" style="background-color:#ddd;display: flex;
            justify-content: space-between;">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item" style="margin:5%">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('SignIn') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown" style="display:flex;width:100%;justify-content:space-between">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>