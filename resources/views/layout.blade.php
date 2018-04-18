<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Kristie Wong | Web Developer</title>

  <!-- Fonts -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/app.css?<?php echo time();?>">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src="/js/app.js"></script>


  <body>

    <!-- - - - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - -  -->

    {{-- Web Nav --}}
    <nav class="navbar navbar-default navbar-expand-lg fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">X</span>
      </button>
      <a class="logo" href="/"><img src="../img/Kristie-Wong-logo.gif" alt="Kristie Wong Logo"></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"></li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item active">
            <a class="link-item" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="link-item" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="link-item" href="/portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="link-item" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="link-item" href="/contact">Contact</a>
          </li>
          <li><a href="mailto:kristie.wong90@gmail.com?Subject=Inquiry" target="_top>"><i class="fa fa-envelope fa-lg"></i></a></li>
        </ul>
      </div>
    </nav>



    @yield('content')

    <!-- - - - - - - - - - - - - - - - Footer  - - - - - - - - - - - - - - -  -->
    <footer class="page-footer font-small pt-0">

      <!--Footer Links-->
      <div class="container">

        <!--Grid row-->
        <div class="row pt-4 mb-1 text-center d-flex justify-content-center">

          <!--Grid column-->
          <div class="col-md-1 mb-1">
            <h6 class="text-uppercase">
              <a href="/about">About</a>
            </h6>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-1 mb-1">
            <h6 class="text-uppercase">
              <a href="/portfolio">Portfolio</a>
            </h6>
          </div>
          <!--Grid column-->
          <div class="col-md-1 mb-1">
            <h6 class="text-uppercase">
              <a href="blog">Blog</a>
            </h6>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-1 mb-1">
            <h6 class="text-uppercase">
              <a href="/contact">Contact</a>
            </h6>
          </div>

        </div>
        <!--Grid row-->

        <hr class="rgba-white-light">

        <!--Grid row-->
        <div class="row pb-1">

          <!--Grid column-->
          <div class="col-sm-12">

            <div class="mb-2 flex-center text-center justify-content-center">
              <!--Linkedin-->
              <a class="li-ic" href="https://www.linkedin.com/in/wongkristi/" target="_top>">
                <i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic" href="https://www.instagram.com/thewongadventures/" target="_top>">
                <i class="fa fa-instagram fa-lg white-text mr-md-4"> </i>
              </a>
              <!--Github-->
              <a class="gh-ic" href="https://github.com/kristiewong90" target="_top>">
                <i class="fa fa-github fa-lg white-text mr-md-4"></i>
              </a>
              <a href="mailto:kristie.wong90@gmail.com?Subject=Inquiry" target="_top>">
                <i class="fa fa-envelope fa-lg"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="footer-copyright py-1 text-center">
          © 2018 Copyright Kristie Wong
        </div>
      </div>
    </footer>
  </body>


  </html>
