<div class="content-container">
  <div class="content-container-header">
      Your Profile
  </div>
  <div class="content-container-body">
      <!--New Post Form-->
        <div class="content-container-profile">
          <div class="content-container-profile-img" style="background-image: url({{url('storage/'.Auth::user()->picture_url)}});">

          </div>
          <div class="content-container-profile-bio">
            <p>{{ Auth::user()->name }}</p>
            {{ Auth::user()->bio }}
          </div>
        </div>
      <button id="profile-setting-btn" style="width: 100%;" name="button">Profile Settings</button>
  </div>
</div>
