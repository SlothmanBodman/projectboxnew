<div class="content-container">
  <div class="content-container-header">
    Profile Settings
  </div>
  <div class="content-container-body">
    <form method="POST" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Biography') }}</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="bio">

                @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

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
                    {{ __('Save Changes') }}
                </button>
                <button id="quick-container-close-3" type="button" class="btn btn-primary">
                    {{ __('Close') }}
                </button>
            </div>
        </div>
    </form>
  </div>
</div>
