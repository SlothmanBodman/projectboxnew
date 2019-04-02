@extends('layouts.news')

@section('content')
  <!--MObile NEwsfeed Options-->
    <div id="global-feed-container" class="row justify-content-center">
      <div class="mobile-additional-options">


        <div class="content-container">
          <div class="content-container-body">
            <p class="small-header">Switch Newsfeed</p>
            <form action="none">
              <a href="{{route('global')}}">
                <button style="width: 100%;" type="button">
                    {{ __('Globalfeed') }}
                </button>
              </a>
            </form>
          </div>
        </div>
      </div>
      <!--Posts-->

        @if(count($followPosts) > 0)
        @include("includes.inc-posts-follow")
          {{$followPosts->links()}}
        @else
          <div class="content-container">
            <div class="content-container-header">
              <p class="small-header">Welcome To Project Box
            </div>
            <div class="content-contianer-body">
              <p class="paragraph">Find Users to Follow on the Globalfeed or by searching for friend.</p>
            </div>
          </div>
        @endif


    </div>

@endsection
