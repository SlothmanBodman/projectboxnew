<div class="content-container">
                <div class="content-container-body">
                  <form class="" action="index.html" method="post">

                        <select id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                          <option value="nofilter">Filter Feed</option>
                          <option value="uiux">UI/UX</option>
                            <option value="branding">Branding</option>
                              <option value="print">Print</option>
                                <option value="animation">Animation</option>
                              <option value="illustration">Illustration</option>
                            <option value="assets">Digital Assets</option>
                          <option value="other">Other</option>
                        </select>
                  </form>
                  <form action="none">
                    <button id="show-newsfeed" style="width: 100%;" type="button">
                        {{ __('Newsfeed') }}
                    </button>
                    <button id="show-globalfeed" style="width: 100%;" type="button">
                        {{ __('Globalfeed') }}
                    </button>
                  </form>
                </div>
              </div>

<div class="content-container">
  <div class="content-container-body">
      <!--User Info-->
        <div class="content-container-profile">
          @if(isset(Auth::user()->picture_url))
            <div class="content-container-profile-img" style="background-image: url({{url('storage/'.Auth::user()->picture_url)}});">
          @else
            <div class="content-container-profile-img" style="background-image: url({{url('images/default.jpg')}});">
          @endif
          </div>
          <div class="content-container-profile-bio">
            <p class="small-header">{{ Auth::user()->name }}</p>
          @if(isset(Auth::user()->bio))
            <p class="paragraph">{{ Auth::user()->bio }}</p>
          @else
            <p class="paragraph">No Bio</p>
          @endif
          </div>
        </div>
      <button id="profile-setting-btn" style="width: 100%;" name="button">Profile Settings</button>
  </div>
</div>
