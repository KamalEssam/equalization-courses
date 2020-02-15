<!doctype html>

<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free courses Equalization </title>


    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->

  </head>
  <body>

    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="{{route('home')}}">Arab Open University</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('home')}}">Home</a>
              </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{route('faculties')}}">Faculties</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    @foreach($faculties  as $fac)
                        <a class="dropdown-item" href="{{url('/faculty/courses', ['faculty_id' => $fac->id])}}">{{$fac->name }}</a>
                    @endforeach

                </div>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact-us')}}">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="{{route('login')}}">Login</a> / <a href="{{route('login')}}">Register</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
