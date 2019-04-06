@extends('layouts.global')

@section('content')
  <!--MObile NEwsfeed Options-->
    <div id="global-feed-container" class="row justify-content-center">
      <div class="mobile-additional-options">
        <div style="display: none;" class="content-container">
                        <div class="content-container-body">
                          <p class="small-header">Filter Posts Catagory</p>
                          <form class="" action="{{ route('filterfeed') }}" method="post">
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
            <p class="small-header">Switch Feed</p>
            <form action="none">
              <a href="{{ route('home') }}">
                <button style="width: 100%;" type="button">
                    {{ __('Newsfeed') }}
                </button>
              </a>
            </form>
          </div>
        </div>
      </div>
      <!--Posts-->

        @if(count($posts) > 0)
          @include("includes.inc-posts")
            @if ($posts->hasPages())
                <p class="small-header">More Posts</p>
                {{$posts->links()}}
            @endif
        @else
          <div class="content-container">
            <div class="content-container-header">
              Welcome To Project Box
            </div>
            <div class="content-contianer-body">
              <p>The Global Feed will fill up as we gain new users! Use this area to discover more designers and inspiration for your work!</p>
            </div>
          </div>
        @endif



    </div>
@endsection
