@extends('layouts.log')

@section('content')
            <div class="content-container">
                <p class="large-header">Login</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <label for="email" class="col-md-4 col-form-label text-md-right reg-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="reg-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <label for="password" class="col-md-4 col-form-label text-md-right reg-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="reg-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="form-check">
                                    <label class="form-check-label reg-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <!--
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="display: block;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                -->
                    </form>
                </div>
            </div>
@endsection
