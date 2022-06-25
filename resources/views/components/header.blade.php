<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>FlashComments</title>

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/customstyles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        
        <!-- favicon files -->
            <link rel="apple-touch-icon" sizes="180x180" href="{{secure_asset('Favicon/apple-touch-icon.png')}}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{secure_asset('Favicon/favicon-32x32.png')}}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{secure_asset('Favicon/favicon-16x16.png')}}">
            <link rel="manifest" href="{{secure_asset('Favicon/site.webmanifest')}}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.4.5/css/flag-icons.min.css" integrity="sha512-uvXdJud8WaOlQFjlz9B15Yy2Au/bMAvz79F7Xa6OakCl2jvQPdHD0hb3dEqZRdSwG4/sknePXlE7GiarwA/9Wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md mb-5" style="background-color: black">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="{{secure_asset('images/logo.jpeg')}}" alt="" class="d-block align-text-bottom" width="250" height="auto"/>
                <span class="ms-5">FlashComments</span> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto" style="font-size:1.3em;">
                        @auth
                        <li class="nav-item p-3">
                            <span class="nav-link fw-bold">Welcome {{auth()->user()->name}}</span>
                        </li>
                        <li class="nav-item p-3">
                            <a href="/checkout" class="nav-link fw-bold" style="font-family: 'Poppins', sans-serif;"
                                >
                                <i class="bi bi-cart icon"></i> Cart</a
                            >
                        </li>
                        <li class="nav-item p-3">
                            <form action="/logout" class="d-inline" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning">
                                    Logout
                                </button>
                            </form>
                         </li>
                        @else
                        <li class="nav-item p-3">
                            <a href="#" class="nav-link fw-bold" style="font-family: 'Poppins', sans-serif;"
                                >
                                Contact</a
                            >
                        </li>
                        <li class="nav-item p-3">
                            <a href="#" class="nav-link fw-bold" style="font-family: 'Poppins', sans-serif;"
                                >
                                <i class="bi bi-cart icon"></i> Cart</a
                            >
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>


        