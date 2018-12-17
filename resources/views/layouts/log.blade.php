<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Project Box</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav-container">
            <div class="nav-left">
              <a class="nav-brand" href="{{ url('/') }}">
                  <h1 style="color: white;">Project Box</h1>
              </a>
            </div>
                <div class="nav-right">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                                <a class="nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a class="nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                    <!--Profile Page-->
                                    <a class="nav-item" href="{{ route('profile') }}">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <!--Home Link-->
                                    <a class="nav-item" href="{{ route('home') }}">
                                        {{ __('Home') }}
                                    </a>
                                    <!--Projects Link-->
                                    <a class="nav-item" href="{{ route('projects') }}">
                                        {{ __('Projects') }}
                                    </a>
                                    <!--Logout Function-->
                                    <a class="nav-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
                    </ul>
                </div>
        </nav>
        <main class="body-container">
            @yield('content')
        </main>
    </div>
</body>
</html>
