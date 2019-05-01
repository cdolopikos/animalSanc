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

  <div id="demo" class="carousel slide w-60 h-60" data-ride="carousel">
    <h1>Welcome to Aston Animal Sanctuary</h1>
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
          <p>
            are looking for a home!
          </p>
        </div>
      </div>
      <div class="carousel-item h-75">
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
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-6 px-md-6 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Pay us a visit!</h2>
        <p class="lead"><a class="nav-link" href="{{ url('contact') }}">Click here to find our location!</a> </p>
  </div>

  </body>
@endsection
