@extends('layouts.app')

@section('content')
  <div style="width: 100%; text-align: left;">
      <p class="paragraph">Your Search returned {{ $resultCount }} results.</p>
      <p class="paragraph">Now Showing {{count($users)}} of {{$resultCount}} Results.</p>
  </div>
                @if(count($users) > 0)
                  @foreach($users as $user)
                    <!--User Info-->
                    <div class="content-container">
                      <div class="content-container-profile">
                        @if(isset($user->picture_url))
                          <div class="content-container-profile-img" style="background-image: url({{url('storage/'.$user->picture_url)}});"></div>
                        @else
                          <div class="content-container-profile-img" style="background-image: url({{url('images/default.jpg')}});"></div>
                        @endif
                        <div class="content-container-profile-bio">
                        <a href="{{ route('userprofile', ['id' => $user->id]) }}">  <p class="small-header">{{ $user->name }}</p></a>
                        @if(isset($user->bio))
                          <p class="paragraph">{{ $user->bio }}</p>
                        @else
                          <p class="paragraph">No Bio</p>
                        @endif
                        </div>
                      </div>
                    </div>
                  @endforeach

                @if ($users->hasPages())
                    <p class="small-header">More Results</p>
                    {{$users->links()}}  
                @endif

                @else
                    <div class="content-container">
                        <p class="paragraph">This Search Returned no Users.</p>
                    </div>
                    </div>
                @endif
@endsection
