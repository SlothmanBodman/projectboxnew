@extends('layouts.app')

@section('content')
  <div class="content-container">
    <div class="content-container-header">
      Random Project
    </div>
    <div class="content-container-body">
      <p>Use the button bellow to generate a random project!</p>
        <button id="generate" onclick="getProject()">Generate!</button>
        <p>
          <span id="displayOne"></span>
          <span id="projectResult"></span>
          <span id="displayTwo"></span>
          <span id="nameResult"></span>
          <span id="companyResult"></span>
        </p>
    </div>
  </div>

@endsection
