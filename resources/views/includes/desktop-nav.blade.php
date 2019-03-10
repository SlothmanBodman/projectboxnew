<div class="nav-content">
  <div class="nav-left">
    <a class="nav-brand" href="{{ url('/') }}">
        <h1 class="creanu">Creanu</h1>
    </a>
  </div>

      <div class="nav-center">
        <input class="search-bar" type="text" name="q" value="Search">
      </div>

      <div class="nav-right">
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                      <a class="nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                  @if (Route::has('register'))
                          <a class="nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                  @endif
              @else
                          <!--Home Link-->
                          <a class="nav-item" href="{{ route('home') }}">
                              <i class="fas fa-globe nav-icons fa-1x"></i>
                          </a>
                          <!--Projects Link-->
                          <a class="nav-item" href="{{ route('projects') }}">
                              <i class="fas fa-newspaper nav-icons fa-1x"></i>
                          </a>
                          <!--Profile Page-->
                          <a class="nav-item" href="{{ route('profile') }}">
                              <i class="fas fa-user nav-icons fa-1x"></i>
                          </a>
              @endguest
          </ul>
      </div>
      <div class="nav-right-mob">
        <i style="color: white; cursor: pointer;" class="fas fa-bars fa-2x nav-open"></i>
        <i style="color: white; cursor: pointer;" class="fas fa-times fa-2x nav-close"></i>
      </div>
    </div>
