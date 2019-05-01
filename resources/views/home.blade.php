@extends('layouts.app')

@section('content')

    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    </style>
  </head>
  <body>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/chimera-majestic-sheep-tongue.jpg') }}" alt="sheep" style="width:100%;">
        <div class="carousel-caption">
          <h3>Welcome</h3>
          <p><a class="nav-link" href="{{ url('about') }}"><h4>Here we save animlas!</h4></a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/playful-puppies-cute-puppies-41540150-1984-1114.jpg') }}" alt="puppies" style="width:100%;">
        <div class="carousel-caption">
          <h3>Those cuties</h3>
          <p><a class="nav-link" href="{{ url('contact') }}"><h4>are looking for home!</h4></a></p>

        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/shutterstock_352176329.jpg')}}" alt="cat" style="width:100%; height:50%">
        <div class="carousel-caption">
          <h3>Hey</h3>
          <p>Can I come over?</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  </body>
@endsection
