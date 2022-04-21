<nav class="navbar navbar-expand-lg mb-3 navbar navbar-light" style="background-color: #CBB49E;">
  <a class="navbar-brand" href="#" style="color: #FFEBCC;">Kwaderno</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
      <!-- <a class="nav-link" href="/about">About</a>
      <a class="nav-link" href="/services">Services</a> -->
      <a class="nav-link" href="/posts">Blogs</a>
    </div>
  </div>
  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
 <!-- Authentication Links -->
    @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
       </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </div>
            </li>
                          @endguest                         
  </ul>
</nav>
