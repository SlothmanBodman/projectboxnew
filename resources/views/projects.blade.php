@extends('layouts.app')

@section('content')

  @if (count($briefs) > 0)
    @foreach($briefs->reverse() as $brief)
      <div class="content-container">
        <div class="content-container-header">
          {{ $brief->title }}
        </div>
        <div class="content-container-body">
          <p>{{ str_limit($brief->content, 200) }}</p>
            <br>
          <a href="{{ route('brief', ['title' => $brief->title])}}"> <p>View Full Brief</p> </a>
        </div>
        <div class="content-container-footer" style="text-align: right;">
          <p class="sub-text">| Date Published: {{ $brief->created_at }} | Catagory: {{ $brief->type }} |</p>
        </div>
      </div>
    @endforeach
  @else
    <div class="content-container">
      <div class="content-container-header">
        No Projects
      </div>
      <div class="content-container-body">
        <p>Unfortunately There are no Projects at this time. Please check back later.</p>
      </div>
    </div>
  @endif

@endsection
