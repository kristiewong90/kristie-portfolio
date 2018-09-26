@extends('layout')

@section('content')

<div class="container">




  <div class="works-card">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <a href="/portfolio/kristie">
          <div class="box">
            <img src="/img/kristie-home-page.png" alt="Kristie Wong Portfolio">
          </div>
        </a>
        <h6>Kristie Wong Portfolio</h6>
      </div>


      <div class="col-md-4 col-sm-6">
        <a href="/portfolio/breeze-photography">
          <div class="box">
            <img src="/img/breeze-photo.png" alt="Breeze Photography">
          </div>
        </a>
        <h6>Breeze Photography</h6>
      </div>


      <div class="col-md-4 col-sm-6">
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









  {{-- OLD CODE FOR PORTFOLIO PAGE  --}}

  {{-- <div class="page-hero"></div>

  <div class="container portfolio-box">
    <div class="row">

      <div class="col-md-4 col-sm-6">
          <a href="/portfolio/silver-springs">
            <div class="box">
              <img src="/img/silver-springs-wireframes.gif" alt="Silver Springs Massage wireframes">
              <div class="box-content">
                <div class="content-inner">
                  <h3 class="title">Silver Springs Massage</h3>
                  <span>-proposal-</span>
                </div>
              </div>
            </div>
          </a>
      </div>


      <div class="col-md-4 col-sm-6">
        <a href="/portfolio/google-news">
          <div class="box">
            <img src="/img/Google-News-home.gif" alt="Google News Home Page">
            <div class="box-content">
              <div class="content-inner">
                <h3 class="title">Google News</h3>
                <span>-Laraval (remake)-</span>
              </div>
            </div>
          </div>
        </a>
      </div>


      <div class="col-md-4 col-sm-6">
        <a href="/portfolio/sechelt">
          <div class="box">
            <img src="/img/sechelt-home.gif" alt="Sechelt Vistor Centre Website">
            <div class="box-content">
              <div class="content-inner">
                <h3 class="title">Sechelt Visitor Centre</h3>
                <span>-WordPress (redesign)-</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="/portfolio/web-design">
          <div class="box">
            <img src="/img/web-design-home.gif" alt="HTML & CSS Website design">
            <div class="box-content">
              <div class="content-inner">
                <h3 class="title">Website Design</h3>
                <span>-HTML & CSS-</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="/portfolio/breeze-photography">
          <div class="box">
            <img src="/img/Breeze-Photography.gif" alt="Breeze Photography Website">
            <div class="box-content">
              <div class="content-inner">
                <h3 class="title">Breeze Photography</h3>
                <span>-work in progress-</span>
              </div>
            </div>
          </div>
        </a>
      </div>


      <div class="col-md-4 col-sm-6">
          <div class="box">
            <img src="" alt="">
            <div class="box-content">
              <div class="content-inner">
                <h3 class="title">New Project</h3>
                <span>-stay tuned-</span>
              </div>
            </div>
          </div>
      </div>

    </div>

  </div> --}}

@endsection
