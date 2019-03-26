@extends('layouts.app')

@section('content')
                <div class="content-container">
                  <div class="content-container-body">
                    <div class="content-container-profile">
                        @if(isset($user->picture_url))
                          <div class="content-container-profile-img" style="background-image: url({{url('storage/'.$user->picture_url)}});"></div>
                        @else
                          <div class="content-container-profile-img" style="background-image: url({{url('images/default.jpg')}});"></div>
                        @endif

                      <div class="content-container-profile-bio">
                        @if(isset($user->bio))
                        <p class="large-header">{{$user->name}}</p>
                        <p class="paragraph">{{ $user->bio }}</p>
                        @else
                          <p class="large-header">{{$user->name}}</p>
                          <p class="paragraph">No Bio</p>
                        @endif
                      </div>

                    <div class="profile-follow-info">
                      <div class="profile-info">
                        <button id="followers-btn" type="button" style="width: 100%;">{{count($followers)}} followers</button>
                      </div>
                      <div class="profile-info">
                        <button id="following-btn" type="button" style="width: 100%;">{{count($following)}} following</button>
                      </div>
                    </div>
                    @if (in_array($user->id, $userfollowIdArray))
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
                    <form action="{{ route('newchat')}}" method="post">
                      @csrf
                      <button name="userTwoId" value="{{ $user->id }}" style="width: 100%;" name="button">Message</button>
                    </form>
                  </div>
                </div>
              </div>
              <!--Followers/Following List Containers-->

              <div id="followers-container" class="content-container hidden">
                  <p class="small-header">Followers</p>
                  @foreach($followers as $follower)
                    <a href="{{ route('userprofile', ['id' => $follower->id]) }}"><p class="paragraph">{{$follower->name}}</p></a>
                  @endforeach
                  <br>
                  <p id="close-followers-container" class="paragraph" style="cursor: pointer;">Close</p>
              </div>
              <div id="following-container" class="content-container hidden">
                  <p class="small-header">Following</p>
                  @foreach($following as $follows)
                    <a href="{{ route('userprofile', ['id' => $follows->id]) }}"><p class="paragraph">{{$follows->name}}</p></a>
                  @endforeach
                  <br>
                  <p id="close-following-container" class="paragraph" style="cursor: pointer;">Close</p>
              </div>

                @if(count($posts) > 0)
                  @include("includes.inc-posts")
                @else
                        <p class="paragraph">{{$user->name}} has no posts yet.</p>
                @endif
@endsection
