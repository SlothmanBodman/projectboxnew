<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">

    <title>Project Box</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png" sizes="16x16">

    <!-- Fonts/CDN -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/generator.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/nav-control.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/quickContainerControl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/feedControl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/enterPrevent.js') }}"></script>

    <!--Ajax Scripts-->
    <script src="{{ asset('js/likeAjax.js') }}" defer></script>
    <script src="{{ asset('js/unlikeAjax.js') }}" defer></script>
    <script src="{{ asset('js/commentAjax.js') }}" defer></script>

    <script type="text/javascript">
      var urlLike ='{{ route('like') }}';
      var urlunLike ='{{ route('unlike') }}';
      var urlComment ='{{ route('comment') }}';
      var urlFollow ='{{ route('follow') }}';
      var urlUnfollow ='{{ route('unfollow') }}';
    </script>
</head>
<body>
    <div id="app">
        <nav class="nav-container">
            @include('includes.desktop-nav')
        </nav>
      <div class="main-container">

          <div class="left-options-container">
              @include('includes.sidebars.inc-left-options')
          </div>
          <main class="body-container">
              @yield('content')
          </main>
          <div class="right-options-container">
              @include('includes.sidebars.inc-right-options-news')
          </div>

      </div>
</div>
</body>
</html>
