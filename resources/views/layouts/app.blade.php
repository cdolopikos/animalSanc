<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Animal Sanctuary</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @include('inc.navbar')
    

    @yield('content')
  </body>
</html>
