<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Cloud Tech Innovations ')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/linericon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/flaticon/flaticon.css') }}" rel="stylesheet">

    <!-- main css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body
    <div id="app">
        <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="{{url('/img/cloudtech.png')}}" alt="Image"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active"><a class="nav-link" href="/">HOME</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/contestants">CONTESTANT</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/pastwinners">PAST WINNERS</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/about">About Us</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/contact">Contact US</a></li>
                           
                    </div>
                </ul>
                </div>
                </nav>
            </div>
    </header>
            
        <main class="py-0">
            @yield('content')
        </main>
    </div>


  <footer id="footer" class="alert alert-dark">
    <div class="footer-top">
      <div class="container">
      <div class="section-heading">
            <h2> <center> Get in touch with us! </center></h2>
            <div class="line-shape"></div>
        </div>
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i><a href="mailto:info@cloud.com">info@cloud.com</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="tel:+#">+234............</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="tel:+#">+225............</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Meet Us on Social Media</h4>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Office Address</h4>
            <p>
              Port Harcout City.....
              <br>
          </div>

        </div>
      </div>
    </div>

    <div class="container" align = "center">
      <div class="copyright">
       &copy; Copyright <strong>2017 Cloudtech </strong>. All Rights Reserved
      </div>
      <div class="credits">
        <p> by <a href="www.cloudtechinn.com">Cloudtech Innovations</a></p> 
      </div>
    </div>
</footer><!-- #footer -->

     <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/stellar.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('vendors/isotope/isotope-min.js') }}" defer></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}" defer></script>
    <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('vendors/counter-up/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('js/mail-script.js') }}" defer></script>

    <script href= "https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE" ></script>
    <script src="{{ asset('js/gmaps.min.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>
</body>
</html>
