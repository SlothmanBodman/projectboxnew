@extends('layouts.app')

@section('content')
            <div class="content-container">
                <div class="content-container-header">
                  New Post
                </div>
                <div class="content-container-body">
                  <form method="POST" action="{{ route('newpost') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                          <div class="col-md-6">
                              <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption">

                              @if ($errors->has('caption'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('caption') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Catagory') }}</label>

                          <div class="col-md-6">
                              <select id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                                <option value="uiux">UI/UX</option>
                                <option value="branding">Branding</option>
                                <option value="print">Print</option>
                                <option value="animation">Animation</option>
                                <option value="illustration">Illustration</option>
                                <option value="assets">Digital Assets</option>
                                <option value="other">Other</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                          <div class="col-md-6">
                              <input id="file" type="file" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="file" required>

                              @if ($errors->has('file'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('file') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Post') }}
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>

                @if(count($posts) > 0)
                  @include("includes.inc-posts-personal")
                @else
                      <p>You have no posts. Completed Briefs and Projects you chose to share will appear here!</p>
                @endif
@endsection
