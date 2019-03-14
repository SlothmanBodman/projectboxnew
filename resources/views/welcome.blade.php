<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Box</title>
        <link rel="icon" href="{{ asset('images/logo-purple.png') }}" type="image/png" sizes="16x16">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    </head>
    <body style="background-image: url({{ asset('images/background.jpg') }});">
        <div class="wlc-body-container">
              <div class="wlc-content-left">
                <div class="wlc-title-img">
                  
              </div>

              <div class="wlc-buttons">
                @if (Route::has('login'))
                    <div class="wlc-nav-container">
                        @auth
                            <a href="{{ url('/home') }}" class="wlc-nav-btn"><button type="button">Home</button></a>
                        @else
                          <form method="POST" action="{{ route('login') }}">
                              @csrf
                            <div style="display: inline-block;">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif

                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                      <div style="display: block;">
                                          <label class="form-check-label" for="remember" style="width: auto !important;">
                                              {{ __('Remember Me') }}
                                          </label>
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                      </div>
                                  </div>
                                      <div style="display: inline-block; vertical-align:top;">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                      </div>

                                      <!--
                                      @if (Route::has('password.request'))
                                          <a class="btn btn-link" style="display: block;" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                                      @endif
                                    -->
                          </form>
                        @endauth
                    </div>
                @endif
              </div>
              <div class="wlc-content-right">
              <div class="content-vertically-align">
                <div class="wlc-title">
                  <div class="wlc-title-text">Creanu</div>
                </div>
                <div style="color: white;" class="wlc-para">
                    <p class="paragraph">Creanu is a design focused social network. We bring
                      you a range of monthly and weekly project briefs so you
                      are never lacking inspiration! Create a profile to share
                      your work with a friendly community of creative designers
                      and recive feedback to help improve your design skills!</p>
                </div>
                <br>
                <a href="{{ route('register') }}" class="wlc-nav-btn"><button type="button">Register</button></a>
              </div>
            </div>
        </div>
    </body>
</html>
