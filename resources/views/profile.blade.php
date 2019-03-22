@extends('layouts.app')

@section('content')
  <div class="mobile-additional-options">
    <div class="content-container">
        <!--User Info-->
          <div class="content-container-profile">
            @if(isset(Auth::user()->picture_url))
              <div class="content-container-profile-img" style="background-image: url({{url('storage/'.Auth::user()->picture_url)}});"></div>
            @else
              <div class="content-container-profile-img" style="background-image: url({{url('images/default.jpg')}});"></div>
            @endif

            <div class="content-container-profile-bio">
              <p class="small-header">{{ Auth::user()->name }}</p>
            @if(isset(Auth::user()->bio))
              <p class="paragraph">{{ Auth::user()->bio }}</p>
            @else
              <p class="paragraph">No Bio</p>
            @endif
            </div>
          </div>
        <div style="text-align: right;">
          <!--Logout Function-->
            <a class="logout-btn" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
  </div>

                @if(count($posts) > 0)
                  @include("includes.inc-posts-personal")
                @else
                    <div class="content-container">
                      <div class="content-container-header">
                        Welcome To Project Box
                      </div>
                      <div class="content-contianer-body">
                        <p>You have no posts. Completed Briefs and Projects you chose to share will appear here!</p>
                      </div>
                    </div>

                @endif
@endsection
