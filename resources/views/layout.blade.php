<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Grayrids">
  <title>Health Care Excellence</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}"> --}}
</head>

<body>
  <!-- Header Section Start -->
  <x-header />
  <!-- Header Section End -->

  @yield('content')

  <!-- Preloader -->
  <x-preloader />
  <!-- End Preloader -->
  <!-- jQuery first, then Tether, then Bootstrap JS. -->

  <script src="{{ asset('js/jquery-min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.js') }}"></script>
  <script src="{{ asset('js/jquery.mixitup.js') }}"></script>
  <script src="{{ asset('js/jquery.nav.js') }}"></script>
  <script src="{{ asset('js/scrolling-nav.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/wow.js') }}"></script>
  <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('js/nivo-lightbox.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <script src="{{ asset('js/form-validator.min.js') }}"></script>
  <script src="{{ asset('js/contact-form-script.js') }}"></script>
  {{-- <script src="{{ asset('js/mdb.min.js') }}"></script> --}}
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
