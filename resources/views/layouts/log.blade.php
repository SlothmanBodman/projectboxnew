<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Project Box</title>
    <link rel="icon" href="{{ asset('images/logo-purple.png') }}" type="image/png" sizes="16x16">

    <!-- Fonts/CDN -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/nav-control.js') }}"></script>
</head>
<body>
    <div id="app">
      <!--Error Container-->
      @if ($errors->any())
          <div class="error-container">
              <ul style="list-style: none;">
                <p class="large-header">Error</p>
                  @foreach ($errors->all() as $error)
                      <li style="color: #DC143C;">{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <nav class="nav-container">
            <div class="creanu">Creanu</div>
        </nav>
        <main class="body-container-full-width">
            @yield('content')
        </main>
    </div>
</body>
</html>
