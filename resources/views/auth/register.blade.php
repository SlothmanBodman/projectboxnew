@extends('layouts.log')

@section('content')
            <div class="content-container">
                <p class="large-header" >Register</p>

                <div class="content-container-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                            <label for="name" class="col-md-4 col-form-label text-md-right reg-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class=" reg-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            <label for="email" class="col-md-4 col-form-label text-md-right reg-label">{{ __('E-Mail Address') }}</label>
                              <input id="email" type="email" class="reg-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif




                            <label for="password" class="col-md-4 col-form-label text-md-right reg-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class=" reg-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif



                            <label for="password-confirm" class=" col-md-4 col-form-label text-md-right reg-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="reg-input form-control" name="password_confirmation" required>
                                <br>


                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                    </form>
                </div>
            </div>
@endsection
