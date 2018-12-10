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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Filter Posts by Project Type</div>
                  <div class="card-body">
                      <form class="" action="{{ route('filter') }}" method="POST">
                        @csrf
                        <select id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                          <option value="uiux">UI/UX</option>
                            <option value="branding">Branding</option>
                              <option value="print">Print</option>
                                <option value="animation">Animation</option>
                              <option value="illustration">Illustration</option>
                            <option value="assets">Digital Assets</option>
                          <option value="other">Other</option>
                        </select>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Filter') }}
                        </button>
                      </form>
                      <a href="{{ route('home') }}">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset') }}
                        </button>
                      </a>
                  </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      @include("includes.inc-posts")
    </div>
</div>
@endsection
