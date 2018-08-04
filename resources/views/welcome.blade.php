@extends('layout')

@section('content')


  <div class="fern">

      <div class="home-card col-lg-12 container">

            <div class="navigation">
              <ul class="row nav-links">
                <li class="col-4"><a href="/about">About me</a></li>
                <li class="col-4"><a href="/portfolio">Works</a></li>
                <li class="col-4"><a href="/contact">Contact me</a></li>
              </ul>
            </div>
            <div class="text-area">
              <h1 class="col-11">Kristie</h1>
              <br>
              <h3 class="col-11">Designer / Digital Marketer</h3>
              <div class="quote col-12">
                <p>“You can’t use up creativity the more you use the more you have."</p>
                <p>- Maya Angelou</p>
              </div>
            </div>

          <div class="image-frame"></div>

      </div>

  </div>




<!-- - - - - - - - - - - - - - - - Hero - - - - - - - - - - - - - - -  -->
        {{-- <div class="hero container-fluid"></div> --}}

        {{-- Div for content to be place on hero image --}}
        {{-- <div class="title-card container-fluid">
                <h1 class="name">Kristie Wong</h1>
                <hr>
                <h1 class="slideInFromRight">&lt;d&gt;esigner</h1>
                <h1 class="slideInFromLeft">&lt;d&gt;igital marketer</h1>
                <br>
                <p class="description">UX / UI Designer with a keen interest in digital marketing.</p> --}}

                {{-- <a class="btn work-btn" href="/portfolio">view my work</a> --}}
        {{-- </div> --}}


<!-- - - - - - - - - - - - - - - - Portfolio Section - - - - - - - - - - - - - - -  -->
        {{-- <div class="container portfolio-container">
          <h2 class=featured-work-title> {Featured Work} </h2>

          <div class="row">

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
          </div>
        </div> --}}
@endsection
