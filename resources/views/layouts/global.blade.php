<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">

    <title>Creanu</title>
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/generator.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/nav-control.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/quickContainerControl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/feedControl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/enterPrevent.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mobile-menu-control.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/error-window-control.js') }}"></script>

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
      <!--Error Container-->
      @if ($errors->any())
          <div id="error-window" class="error-container">
              <ul style="list-style: none;">
                <p class="large-header">Error</p>
                  @foreach ($errors->all() as $error)
                      <li style="color: #DC143C;">{{ $error }}</li>
                  @endforeach
              </ul>
              <p id="close-error-window" class="small-header" style="cursor: pointer;">Close</p>
          </div>
      @endif
<!--QUICK CONTAINERS-->
      <!--New Post Container-->
      <div id="new-post-container" class="global-form hidden">
        <div class="content-container" style="margin: 10% auto 0 auto; width: 50%;">
          @include('includes.forms.inc-new-post-form')
        </div>
      </div>
      <!--Profile Settings Container-->
      <div id="profile-settings-container" class="global-form hidden">
        <div class="content-container" style="margin: 10% auto 0 auto; width: 50%;">
          @include('includes.forms.inc-profile-settings-form')
        </div>
      </div>
<!--MOBILE MENU-->
    <div class="mobile-menu-container" id="mobile-menu">
      @include('includes.mobile-menu')
    </div>
<!--NAVIGATION BAR-->
        <nav class="nav-container">
            @include('includes.desktop-nav')
        </nav>
        <nav class="nav-container-mobile" id="mobile">
          @include('includes.mobile-nav')
        </nav>
      <div class="main-container">
<!--MAIN PAGE CONTENT-->
          <div class="left-options-container">
              @include('includes.sidebars.inc-left-options')
          </div>
          <main class="body-container">
              @yield('content')
          </main>
          <div class="right-options-container">
              @include('includes.sidebars.inc-right-options-global')
          </div>

      </div>
</div>
</body>
</html>
