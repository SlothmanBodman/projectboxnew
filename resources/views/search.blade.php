@extends('layouts.app')

@section('content')
                @if(count($users) > 0)
                  @foreach($users as $user)
                    <div class="content-container">
                      <div class="content-container-header">
                        Results
                      </div>
                      <div class="content-contianer-body">
                        <div class="content-container-profile">
                          <div class="content-container-profile-img" style="background-image: url({{url('storage/'.$user->picture_url)}});">

                          </div>
                          <div class="content-container-profile-bio">
                            <p><a href="{{ route('userprofile', ['id' => $user->id])}} ">{{ $user->name }}</a></p>
                            {{ $user->bio }}
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                    <div class="content-container">
                      <div class="content-container-header">
                        Results
                      </div>
                      <div class="content-contianer-body">
                        <p>This Search Returned no Users.</p>
                      </div>
                    </div>
                @endif
@endsection
