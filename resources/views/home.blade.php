@extends('layouts.news')

@section('content')
    <div id="global-feed-container" class="row justify-content-center">
      <div id="follow-feed">
        @if(count($followPosts) > 0)
        @include("includes.inc-posts-follow")
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
      <div id="global-feed">
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
    </div>

@endsection
