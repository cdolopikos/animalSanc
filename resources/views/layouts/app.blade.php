<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Animal Sanctuary</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @include('inc.navbar')
    <div class="conatiner">
      @if(Request::is('/'))
        @include ('inc.showcase')
      @endif

      <div class="row">
        <div clas+"col-md-8 col-lg-8">
          @if(Request::is('/login'))
            @include('inc.signin')
          @endif
        </div>
        <div clas+"col-md-8 col-lg-8">
          @if(Request::is('/register'))
            @include('inc.register')
          @endif
        </div>
      </div>
    </div>

    @yield('content')
  </body>
</html>
