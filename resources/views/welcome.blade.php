<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Showcase Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap & vendor-->
        <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Main Styles -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <!---<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>-->

          <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('homepage')}}" class="logo d-flex align-items-center">
        <img src="{{ asset('images/logo.png') }}" alt="">
        <span>Walid</span><span> Bensidiassa</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @if(Auth::check())
          <li><a class="getstarted scrollto" href="{{ route('dashboard.index') }}">Dashboard</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
          <li><a class="getstarted scrollto" href="#about">Register</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Bensidiaissa Walid</h1>
              <h2 data-aos="fade-up" data-aos-delay="400">Mobile Native & Web Developer - Freelancer</h2>
              </br>
              <h4 data-aos="fade-up" data-aos-delay="600">Native Android Java apps &amp;
                   beautiful websites made with laravel and more </h4>

              <div data-aos="fade-up" data-aos-delay="700">
                <div class="text-start text-lg-start">
                  <a href="#projects" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-start align-self-center">
                    <span>Browse My project</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 hero-img " data-aos="zoom-out" data-aos-delay="200">
              <img src="{{asset('images/hero-img.png')}}" class="img-fluid rounded" alt="" width="450px" height="450px">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->

    <!-- Vendor JS Files -->

       <!-- ======= Portfolio item Section ======= -->

       <x-portfolio >


       </x-portfolio>


  <!-- Template Main JS File -->


  <script src="{{asset('js/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('js/aos/aos.js')}}"></script>
  <script src="{{asset('js/php-email-form/validate.js')}}"></script>
  <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('js/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('js/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('js/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>
