@extends('layout')

@section('content')


  <div class="container portfolio-container">


    <h2>Portfolio Redesign</h2>
    <hr>
    <div class="row">
      <div class="col-6 column-1">
        <h3>the design:</h3>
        <p>I wanted to create a design that was simple and elegant, which represents my style.</p>
      </div>
      <div class="col-6 column-2">
        <h3>what I used:</h3>
        <p>
          <ul>
            <li>Adobe XD</li>
            <li>Illustrator</li>
            <li>PHP (Laravel)</li>
          </ul>
        </p>
      </div>
      </div>


    <div class="row static-images">
      <div class="col-6"><img src="/img/kristie-about.png"></div>
      <div class="col-6"><img src="/img/kristie-contact.png"></div>
    </div>

    <div class="next-button">
      <a href="/portfolio/breeze-photography">Next <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>




@endsection
