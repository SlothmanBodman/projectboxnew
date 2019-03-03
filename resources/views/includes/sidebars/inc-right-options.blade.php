<div class="content-container">
  <div class="content-container-header">
      Your Profile
  </div>
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
            <p>{{ Auth::user()->name }}</p>
          @if(isset(Auth::user()->bio))
            {{ Auth::user()->bio }}
          @else
            <p>No Bio</p>
          @endif
          </div>
        </div>
      <button id="profile-setting-btn" style="width: 100%;" name="button">Profile Settings</button>
  </div>
</div>
