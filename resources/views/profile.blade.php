@extends('layouts.app')

@section('content')
                @if(count($posts) > 0)
                  @include("includes.inc-posts-personal")
                @else
                    <div class="content-container">
                      <div class="content-container-header">
                        Welcome To Project Box
                      </div>
                      <div class="content-contianer-body">
                        <p>You have no posts. Completed Briefs and Projects you chose to share will appear here!</p>
                      </div>
                    </div>

                @endif
@endsection
