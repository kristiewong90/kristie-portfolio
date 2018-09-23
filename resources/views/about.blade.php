@extends('layout')

@section('content')


  <div class="about-me">


      <div class="left-photo">
          {{-- <img src="/img/france.jpg" alt="kristie in France"> --}}
      </div>

      <div class="left-content">

        <div class="navigation">
          <ul class="row nav-links">
            <li class="col-4"><a href="/">Home</a></li>
            <li class="col-4"><a href="/portfolio">Works</a></li>
            <li class="col-4"><a href="/contact">Contact me</a></li>
          </ul>
        </div>

        <div class="content">
          <h1>About me</h1>
          <br>
          <p>My background is a bit unusual. I studied Economics & Business at the University of Victoria.
            After graduating I found that wasn’t my passion. I entered into the web development at SAIT after
            many years of trying to find my passion. Web development is what sparked my interest in UX / UI
            design and digital marketing. That’s the direction I plan on taking my career in!</p>
          <br>

          {{-- <div class="timeline">

            <div class="row">
              <p class="col-2 date">2013</p>
              <p class="col-2"> graduated from UVic</p>

              <p class="col-2 date">2015</p>
              <p class="col-2">Jr. Accountant at Concorde Group</p>

              <p class="col-2 date">2017</p>
              <p class="col-2">Web Development at SAIT</p>
            </div>

            <hr>

            <div class="row">
              <p class="col-2 date">2014</p>
              <p class="col-2">traveled SE Asia</p>

              <p class="col-2 date">2016</p>
              <p class="col-2">traveled NZ & Europe</p>

              <p class="col-2 date">2018</p>
              <p class="col-2">Jr. UX / UI Designer at Dissolve</p>
            </div>

        </div> --}}



        </div>


      </div>


  </div>


@endsection
