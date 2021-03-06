<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Kwaderno') }}</title> -->
    <title>Kwaderno</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg mb-3 navbar navbar-light" style="background-color: #b99378;">
  <a class="navbar-brand" href="#" style="color: #FFEBCC;">Kwaderno</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link " href="/home" style="color: #FFEBCC;">Home <span class="sr-only">(current)</span></a>
      <!-- <a class="nav-link" href="/about">About</a>
      <a class="nav-link" href="/services">Services</a> -->
      <a class="nav-link" href="/posts" style="color: #FFEBCC;">Blogs</a>
    </div>
  </div>
  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
 <!-- Authentication Links -->
    @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}" style="color: #FFEBCC;">{{ __('Login') }}</a>
       </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}" style="color: #FFEBCC;">{{ __('Register') }}</a>
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

</body>
</html>
