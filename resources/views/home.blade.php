@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                  <p>View projects by other users to gain inspiration and share ideas with other creatives!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      @include("includes.inc-posts")
    </div>
</div>
@endsection
