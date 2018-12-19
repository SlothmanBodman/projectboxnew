<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Box</title>
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png" sizes="16x16">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
      @if (Route::has('login'))
          <div class="wlc-nav-container">
              @auth
                  <a href="{{ url('/home') }}" class="wlc-nav-btn">Home</a>
              @else
                  <a href="{{ route('login') }}" class="wlc-nav-btn">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="wlc-nav-btn">Register</a>
                  @endif
              @endauth
          </div>
      @endif
        <div class="wlc-body-container">
            <div class="wlc-content">
              <div class="content-vertically-align">
                <div class="wlc-title">
                  <div class="wlc-title-img">
                    <img style="width: 20%; height: auto;" src="{{ asset('images/logo-white.png')}}" alt="">
                  </div>
                  <div class="wlc-title-text">
                    Project Box
                  </div>
                </div>
                <div style="color: white;" class="wlc-para">
                    <p>Project Box is a design focused social network. We bring
                      you a range of monthly and weekly project briefs so you
                      are never lacking inspiration! Create a profile to share
                      your work with a friendly community of creative designers
                      and recive feedback to help improve your design skills!</p>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
