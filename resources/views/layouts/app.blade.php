<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aston Animal Sanctuary</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <body>
    <div id="app">
      <header>
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <div class="container">
                 <a class="navbar-brand" href="{{ url('/') }}">Aston A.S.</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   @if(Auth::check() && Auth::user()->role == 0)
                         <ul class="nav navbar-nav">
                             &nbsp;
                             @guest
                             @else
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('home') }}">Home</a>
                             </li>

                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('display') }}">Make Adoptions</a>
                             </li>

                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('userrequests') }}">Adoption Requests</a>
                             </li>
                             @endguest
                         </ul>
                         @else
                         <ul class="nav navbar-nav">
                             &nbsp;
                             @guest
                             @else
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('animals') }}">Admin Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('viewrequests') }}">Review Decisions</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('requests') }}">All Requests </a>
                             </li>

                             @endguest
                         </ul>
                         @endif


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
                                    <span class="caret"></span>
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
                 </div>
             </div>
       </nav>
      </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
