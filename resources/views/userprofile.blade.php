@extends('layouts.app')

@section('content')
                <div class="content-container">
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
                        <p class="large-header">{{$user->name}}</p>
                        <p class="paragraph">{{ $user->bio }}</p>
                        @else
                          <p class="paragraph">No Bio</p>
                        @endif
                      </div>
                    </div>
                    @if (in_array($user->id, $followIdArray))
                      <form action="{{ route('unfollow')}}" method="post">
                        @csrf
                        <button name="unfollowId" value="{{ $user->id }}" style="width: 100%;" name="button">Unfollow</button>
                      </form>
                    @else
                      <form action="{{ route('follow')}}" method="post">
                        @csrf
                        <button name="followId" value="{{ $user->id }}" style="width: 100%;" name="button">Follow</button>
                      </form>
                    @endif
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
