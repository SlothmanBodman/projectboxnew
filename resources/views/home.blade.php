@extends('layouts.app')

@section('content')
    <div id="global-feed-container" class="row justify-content-center">
      <div class="content-container">
                  <div class="content-container-header ">
                    Filter Global Feed by Project Type
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
                          <button style="width: 100%;" type="submit">
                              {{ __('Filter') }}
                          </button>
                        </form>
                        <a href="{{ route('home') }}">
                          <button style="width: 100%;" type="submit">
                              {{ __('Reset') }}
                          </button>
                        </a>
                    </div>
      </div>
      @if(count($posts) > 0)
        @include("includes.inc-posts")
      @else
          <div class="content-container">
            <div class="content-container-header">
              Welcome To Project Box
            </div>
            <div class="content-contianer-body">
              <p>Find Users to Follow on the global Newsfeed or by searching for friend.</p>
            </div>
          </div>

      @endif
    </div>
    <!--Use Above Code to create personal feed-->

@endsection
