<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
        <a href="{{ url('/') }}" class="navbar-item">
          <img src="{{asset('img/logo-1.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="250">

        </a>
        <div class="navbar-burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>

  <div class="navbar-menu" id="navMenu">
    <div class="navbar-end"></div>

    <div class="navbar-start">
      @if (Auth::guest())
        <a class="navbar-item " href="{{ route('login') }}">الدخول</a>
        <a class="navbar-item " href="{{ route('register') }}">تسجيل</a>
      @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
</nav>