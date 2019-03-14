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
      <div style="text-align: right;">
        <!--Logout Function-->
          <a class="logout-btn" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
  </div>
</div>
<div class="content-container">
                <div class="content-container-body">
                  <p class="small-header">Filter Posts Catagory</p>
                  <form class="" action="{{ route('filter') }}" method="post">
                      @csrf
                        <select class="catagory-select" id="type" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="type">
                          <option value="uiux">UI/UX</option>
                            <option value="branding">Branding</option>
                              <option value="print">Print</option>
                                <option value="animation">Animation</option>
                              <option value="illustration">Illustration</option>
                            <option value="assets">Digital Assets</option>
                          <option value="other">Other</option>
                        </select>

                        <button style="width: 100%;" type="submit">
                            {{ __('Filter Feed') }}
                        </button>
                    </form>
                      <form action="{{ route('home') }}">
                        <button style="width: 100%;" type="submit">
                            {{ __('Reset Feed') }}
                        </button>
                      </form>
                </div>
</div>

<div class="content-container">
  <div class="content-container-body">
    <p class="small-header">Switch Newsfeed</p>
    <form action="none">
      <button id="show-newsfeed" style="width: 100%;" type="button" class="hidden">
          {{ __('Newsfeed') }}
      </button>
      <button id="show-globalfeed" style="width: 100%;" type="button">
          {{ __('Globalfeed') }}
      </button>
    </form>
  </div>
</div>
