<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Kristie Wong | Web Designer</title>

  <!-- Fonts -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Courgette|Lobster|Raleway" rel="stylesheet">
  {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
  <link rel="stylesheet" href="/css/app.css?<?php echo time();?>">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src="/js/app.js"></script>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">


  <body>
    <!-- - - - - - - - - - - - - - - - Navigation  - - - - - - - - - - - - - - -  -->

    <div class="navigation container">
      <ul class="row nav-links">
        <li class="col-3"><a href="/">Home</a></li>
        <li class="col-3"><a href="/about">About me</a></li>
        <li class="col-3"><a href="/portfolio">Portfolio</a></li>
        <li class="col-3"><a href="/contact">Contact</a></li>
      </ul>
    </div>


    @yield('content')


    <!-- - - - - - - - - - - - - - - - Footer  - - - - - - - - - - - - - - -  -->
    <footer class="page-footer font-small pt-0">

      <!--Footer Links-->
      <div class="container">

        <!--Grid row-->
        <div class="row footer-menu pt-3 mb-0 text-center d-flex justify-content-center">

          <!--Grid column-->
          <div class="col-md-2 mb0">
            <h6 class="text-uppercase">
              <a href="/">Home</a>
            </h6>
          </div>
          <!--Grid column-->
          <div class="col-md-2 mb-0">
            <h6 class="text-uppercase">
              <a href="/about">About me</a>
            </h6>
          </div>
          <!--Grid column-->
          <div class="col-md-2 mb-0">
            <h6 class="text-uppercase">
              <a href="/portfolio">Portfolio</a>
            </h6>
          </div>
          <!--Grid column-->
          <div class="col-md-2 mb-0">
            <h6 class="text-uppercase">
              <a href="/contact">Contact</a>
            </h6>
          </div>

        </div>
        <!--Grid row-->

        <hr class="rgba-white-light">

        <!--Grid row-->
        <div class="row pb-0">

          <!--Grid column-->
          <div class="col-sm-12">

            <div class="mb-2 flex-center text-center justify-content-center">
              <!--Email-->
              <a href="mailto:kristie.wong90@gmail.com?Subject=Inquiry" target="_top>">
                <i class="fa fa-envelope fa-md white-text mr-md-4 icons"></i>
              </a>
              <!--Linkedin-->
              <a class="li-ic icons" href="https://www.linkedin.com/in/wongkristi/" target="_top>">
                <i class="fa fa-linkedin fa-md white-text mr-md-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic icons" href="https://www.instagram.com/thewongadventures/" target="_top>">
                <i class="fa fa-instagram fa-md white-text mr-md-4"> </i>
              </a>
              <!--Dribbble-->
        			<a class="ins-ic icons" href="https://dribbble.com/kristiewong" target="_top>">
        				<i class="fa fa-dribbble fa-md white-text"> </i>
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
