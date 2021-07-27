<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>@yield('title')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS Matarialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            referrerpolicy="no-referrer"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    @yield('head')
</head>

<body>
<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper pl-4">
                <a class="brand-logo" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @guest
                        <li>
                            <a href="{{ route('login') }}"><i class="material-icons left">lock</i>{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"><i class="material-icons left">edit_note</i>
                                    {{ __('Register') }}</a>
                            </li>
                        @endif

                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons left">logout</i>{{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @endguest
                </ul>
                {{--                @auth--}}
                {{--                    <ul id="topnav-dropdown1" class="dropdown-content">--}}
                {{--                        <li>--}}
                {{--                            <a href="{{ route('logout') }}"--}}
                {{--                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                {{--                                {{ __('Logout') }}--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--                        @csrf--}}
                {{--                    </form>--}}
                {{--                @else--}}
                {{--                    <ul id="topnav-dropdown1" class="dropdown-content">--}}
                {{--                        <li>--}}
                {{--                            <a href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                {{--                        </li>--}}
                {{--                        @if (Route::has('register'))--}}
                {{--                            <li>--}}
                {{--                                <a href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                {{--                            </li>--}}
                {{--                        @endif--}}
                {{--                    </ul>--}}
                {{--                @endauth--}}
            </div>
        </nav>
    </div>
</header>

<main class="my-5">
    @yield('content')
</main>

<footer>

</footer>
<script>
    M.AutoInit();
</script>
</body>

</html>
