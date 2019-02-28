<div class="content-container">
  <div class="content-container-header">
    Search Users
  </div>
  <div class="content-container-body">
    <form method="POST" action="{{ route('usersearch') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="q" class="col-md-4 col-form-label text-md-right">{{ __('Search...') }}</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="q">

                @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Search') }}
                </button>
                <button id="quick-container-close-2" type="button" class="btn btn-primary">
                    {{ __('Close') }}
                </button>
            </div>
        </div>
    </form>
  </div>
</div>
