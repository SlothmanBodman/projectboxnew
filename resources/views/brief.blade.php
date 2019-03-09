@extends('layouts.app')

@section('content')
  @foreach($brief as $project)
    <div class="content-container">
      <div class="content-container-header">
        {{$project->title}}
        <p class="sub-text">| Date Published: {{ $project->created_at }} | Catagory: {{ $project->type }} |</p>
      </div>
      <div class="content-container-body">
        <p>{{$project->content}}</p>
      </div>
    </div>
  @endforeach

@endsection
