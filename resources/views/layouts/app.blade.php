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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
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
      <!--New Post Container-->
      <div id="new-post-container" class="quick-container hidden">
          <div class="content-container">
            <div class="content-container-header">
              New Post
            </div>
            <div class="content-container-body">
              <form method="POST" action="{{ route('newpost') }}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group row">
                      <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                      <div class="col-md-6">
                          <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption">

                          @if ($errors->has('caption'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('caption') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Catagory') }}</label>

                      <div class="col-md-6">
                          <select id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                            <option value="uiux">UI/UX</option>
                            <option value="branding">Branding</option>
                            <option value="print">Print</option>
                            <option value="animation">Animation</option>
                            <option value="illustration">Illustration</option>
                            <option value="assets">Digital Assets</option>
                            <option value="other">Other</option>
                          </select>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                      <div class="col-md-6">
                          <input id="file" type="file" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="file" required>

                          @if ($errors->has('file'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('file') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Post') }}
                          </button>
                          <button id="quick-container-close" class="btn btn-primary">
                              {{ __('Close') }}
                          </button>
                      </div>
                  </div>
              </form>
            </div>
          </div>
      </div>
      <div id="new-search-container" class="quick-container hidden">
          <div class="content-container">
            <div class="content-container-header">
              Search Users
            </div>
            <div class="content-container-body">
              <form method="POST" action="{{ route('usersearch') }}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group row">
                      <label for="q" class="col-md-4 col-form-label text-md-right">{{ __('Search...') }}</label>

                      <div class="col-md-6">
                          <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="q">

                          @if ($errors->has('caption'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('caption') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Search') }}
                          </button>
                          <button id="quick-container-close" class="btn btn-primary">
                              {{ __('Close') }}
                          </button>
                      </div>
                  </div>
              </form>
            </div>
          </div>
      </div>
      <!--MOBILE-->
        <div class="nav-mob-container">
          <div class="nav-mob-content">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                        <a class="nav-item-mob" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                            <a class="nav-item-mob" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                            <!--Home Link-->
                            <a class="nav-item-mob" href="{{ route('home') }}">
                                {{ __('News') }}
                            </a>
                            <!--Profile Page-->
                            <a class="nav-item-mob" href="{{ route('profile') }}">
                                {{ __('Profile') }}
                            </a>
                            <!--Projects Link-->
                            <a class="nav-item-mob" href="{{ route('projects') }}">
                                {{ __('Projects') }}
                            </a>
                            <!--Logout Function-->
                            <a class="nav-item-mob" href="{{ route('logout') }}"
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
        </div>
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
                                    <!--Home Link-->
                                    <a class="nav-item" href="{{ route('home') }}">
                                        {{ __('Newsfeed') }}
                                    </a>
                                    <!--Profile Page-->
                                    <a class="nav-item" href="{{ route('profile') }}">
                                        {{ __('Profile') }}
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
                <div class="nav-right-mob">
                  <i style="color: white; cursor: pointer;" class="fas fa-bars fa-2x nav-open"></i>
                  <i style="color: white; cursor: pointer;" class="fas fa-times fa-2x nav-close"></i>
                </div>
        </nav>
        <div class="left-options-container">
            @include('includes.inc-left-options')
        </div>
        <main class="body-container">
            @yield('content')
        </main>
        <div class="right-options-container">
            @include('includes.inc-right-options')
        </div>
    </div>
</body>
</html>
