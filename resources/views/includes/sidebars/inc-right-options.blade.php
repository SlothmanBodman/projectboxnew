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
