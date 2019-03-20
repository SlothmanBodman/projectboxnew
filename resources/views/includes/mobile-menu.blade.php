<div class="mobile-menu-content">
  <div class="menu-header">
    <div class="menu-header-content" style="text-align: left;">
      <div class="creanu">
        Creanu
      </div>
    </div>
    <div class="menu-header-content" style="text-align: right;">
      <i id="close-mobile-menu" style="padding-right: 20px;" class="fas nav-mob-icons fa-times"></i>
    </div>
  </div>
  <!--Menu Options-->
  <div class="menu-padding">
    <!--Search-->
    <div class="content-container">
      <p class="large-header">Search</p>
      <form method="POST" action="{{ route('usersearch') }}" enctype="multipart/form-data">
        @csrf
        <input class="search-bar-mob" type="text" name="search" placeholder="Search">
        <button class="search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
    <!--New Post-->
    <div class="content-container">
      @include('includes.forms.inc-new-post-form')
    </div>
    <!--Quick Project-->
    <div class="content-container">
      <p class="large-header">Quick Project</p>
      <p class="paragraph">Use the button bellow to generate a random project!</p>
        <button style="width: 100%;"id="generate" onclick="getProject()">Generate!</button>
    </div>
    <div id="rand-prj-container" class="content-container hidden">
      <p id="rand-project" class="paragraph">
        <span id="displayOne"></span>
        <span id="projectResult"></span>
        <span id="displayTwo"></span>
        <span id="nameResult"></span>
        <span id="companyResult"></span>
      </p>
    </div>
  </div>
</div>
