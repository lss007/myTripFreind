<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/tempusdominus-bootstrap-4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/mCustomScrollbar.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @livewireStyles
  <title>My Trip Freind - @yield('title')</title>
</head>

<body>
  <section>
    {{ $slot }}
  </section>

  @livewireScripts
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/moment-with-locales.min.js') }}"></script>
  <script src="{{ asset('assets/js/tempusdominus-bootstrap-4.js') }}"></script>
  <script src="{{ asset('assets/js/custom-select.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
