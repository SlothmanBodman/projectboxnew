@extends('layouts.app')

@section('content')
                @if(count($users) > 0)
                  @foreach($users as $user)
                    <div class="content-container">
                      <div class="content-container-header">
                        {{$user->name}}
                      </div>
                      <div class="content-contianer-body">
                        <p>Profile Picture and Bio</p>
                      </div>
                    </div>
                  @endforeach
                @else
                    <div class="content-container">
                      <div class="content-container-header">
                        Search Results
                      </div>
                      <div class="content-contianer-body">
                        <p>This Search Returned no Users.</p>
                      </div>
                    </div>
                @endif
@endsection
