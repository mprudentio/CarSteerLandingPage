<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Steering | {{ $title }}</title>
    <link rel="shortcut icon" href={{ asset('img/car.png') }} type="image/x-icon">
    <link rel="stylesheet" href="public\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}>
  </head>
  <body>
    @include('partials.navbar')
    <div class="">
        @yield('container')
    </div>
    @extends('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        var myCarousel = new bootstrap.Carousel(document.getElementById('myCarousel'), {
          interval: 5000, // Set the time interval for each slide (in milliseconds)
          pause: "hover", // Pause the carousel on hover
        });
      </script>
  </body>
</html>