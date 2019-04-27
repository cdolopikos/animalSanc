<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Animal Sanctuary</title>
    <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @include('inc.navbar')
    <div class="conatiner">
      @if(Request::is('/'))
        @include ('inc.showcase')
      @endif

      <div class="row">
          @if(Request::is('/login'))
            @include('inc.signin')
          @endif



      </div>
    </div>

    @yield('content')
  </body>
</html>
