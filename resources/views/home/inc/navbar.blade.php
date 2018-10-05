<nav id="nav-menu-container">
        <ul class="nav-menu">
              <li class="menu-active"><a href="#hero">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Services & Amenities</a></li>
              <li><a href="#portfolio">Room & Facilities</a></li>
              <li><a href="#contact">Contact Us</a></li>
      @guest
              <li class="">
                  <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li class="">
                  <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
      @else
              <li class="menu-has-children">
                <a id="navbarDropdown" href="#">
                    {{ Auth::user()->fname }} {{ Auth::user()->lname }} <span class="caret"></span>
                </a>
          <ul>
            @if(Auth::user()->user_role_id != 3)
              <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @endif
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </li>
          </ul>
      </li>
      @endguest
          
        </ul>
      </nav><!-- #nav-menu-container -->