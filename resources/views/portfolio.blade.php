@extends('layout')

@section('content')

<div class="container">




  <div class="works-card">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <a href="/portfolio/kristie">
          <div class="box">
            <img src="/img/kristie-home-page.png" alt="Kristie Wong Portfolio">
          </div>
        </a>
        <h6>Kristie Wong Portfolio</h6>
      </div>


      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <a href="/portfolio/breeze-photography">
          <div class="box">
            <img src="/img/breeze-photo.png" alt="Breeze Photography">
          </div>
        </a>
        <h6>Breeze Photography</h6>
      </div>


      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <a href="/portfolio/dissolve">
          <div class="box">
            <img src="/img/dissolve.png" alt="Dissolve">
          </div>
        </a>
        <h6>Dissolve</h6>
      </div>

    </div>
  </div>

</div>


@endsection
