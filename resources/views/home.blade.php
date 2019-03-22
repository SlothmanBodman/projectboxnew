@extends('layouts.news')

@section('content')
  <!--MObile NEwsfeed Options-->
    <div id="global-feed-container" class="row justify-content-center">
      <div class="mobile-additional-options">
        <div class="content-container">
                        <div class="content-container-body">
                          <p class="small-header">Filter Posts Catagory</p>
                          <form class="" action="{{ route('filter') }}" method="post">
                              @csrf
                                <select class="catagory-select" id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                                  <option value="uiux">UI/UX</option>
                                    <option value="branding">Branding</option>
                                      <option value="print">Print</option>
                                        <option value="animation">Animation</option>
                                      <option value="illustration">Illustration</option>
                                    <option value="assets">Digital Assets</option>
                                  <option value="other">Other</option>
                                </select>

                                <button style="width: 100%;" type="submit">
                                    {{ __('Filter Feed') }}
                                </button>
                            </form>
                              <form action="{{ route('home') }}">
                                <button style="width: 100%;" type="submit">
                                    {{ __('Reset Feed') }}
                                </button>
                              </form>
                        </div>
        </div>

        <div class="content-container">
          <div class="content-container-body">
            <p class="small-header">Switch Newsfeed</p>
            <form action="none">
              <button id="show-newsfeed-mobile" style="width: 100%;" type="button" class="hidden">
                  {{ __('Newsfeed') }}
              </button>
              <button id="show-globalfeed-mobile" style="width: 100%;" type="button">
                  {{ __('Globalfeed') }}
              </button>
            </form>
          </div>
        </div>
      </div>
      <!--Posts-->
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
