@extends('layouts.app')

@section('content')
                <div class="content-container">
                  <div class="content-container-header">
                    {{$user->name}}
                  </div>
                  <div class="content-container-body">
                    <div class="content-container-profile">
                        @if(isset($user->picture_url))
                          <div class="content-container-profile-img" style="background-image: url({{url('storage/'.$user->picture_url)}});">
                        @else
                          <div class="content-container-profile-img" style="background-image: url({{url('images/default.jpg')}});">
                        @endif
                      </div>
                      <div class="content-container-profile-bio">
                        @if(isset($user->bio))
                        <p>{{ $user->bio }}</p>
                        @else
                          <p>No Bio</p>
                        @endif
                      </div>
                    </div>
                    <button id="follow-btn" value="{{ $user->id }}" style="width: 100%;" name="button">Follow</button>
                  </div>
                </div>
                @if(count($posts) > 0)
                  @include("includes.inc-posts")
                @else
                    <div class="content-container">
                      <div class="content-container-header">
                        {{$user->name}}
                      </div>
                      <div class="content-contianer-body">
                        <p>{{$user->name}} has no posts yet.</p>
                      </div>
                    </div>
                @endif
@endsection
