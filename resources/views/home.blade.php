@extends('layouts.app')

@section('content')
    <div class="content-container">
                <div class="content-container-header ">
                  Filter Posts by Project Type
                </div>
                  <div class="content-container-body">
                      <form class="" action="{{ route('filter') }}" method="POST">
                        @csrf
                        <select id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                          <option value="uiux">UI/UX</option>
                            <option value="branding">Branding</option>
                              <option value="print">Print</option>
                                <option value="animation">Animation</option>
                              <option value="illustration">Illustration</option>
                            <option value="assets">Digital Assets</option>
                          <option value="other">Other</option>
                        </select>
                        <button type="submit">
                            {{ __('Filter') }}
                        </button>
                      </form>
                      <a href="{{ route('home') }}">
                        <button type="submit">
                            {{ __('Reset') }}
                        </button>
                      </a>
                  </div>
    </div>
    <div class="row justify-content-center">
      @include("includes.inc-posts")
    </div>

@endsection
