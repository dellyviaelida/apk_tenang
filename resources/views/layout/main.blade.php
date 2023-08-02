<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tenang | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Sacramento&display=swap');
      .nama-aplikasi{
        font-family: 'Sacramento', cursive;
        font-size: 40px;
      }
      .nav-link{
        font-size: 18px;
      }
      .judul{
        font-size: 18px;
      }
      .jumbotron {
        background-image: url(pictures/beranda.png);
        background-size: contain;
        background-repeat: no-repeat;
        height: 540px;
        margin-top: -20px;
        position: relative;
        margin-left: 26%;
      }
      .jumbotron .container {
        z-index: 1;
        position: relative;
        left: -250px;
      }
      .jumbotron .display-4{
        margin-top: 150px;
        font-family: 'Open Sans', sans-serif;
        color: #000000;
        font-size: 36px;
      }
      .guide-img::after {
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        background-color: #000000;
        opacity: 0.2;
        position: absolute;
        bottom: 0;
        border-radius: 20px;
      }
      .carousel h4{
        font-size: 48px;
        color: white;
      }
      .motivation{
        font-family: 'Open Sans', sans-serif;
        color: #367795;
        font-size: 52px;
      }
      .intro{
        font-size: 20px;
      }
      .text{
        font-size: 20px;
        font-weight: 600;
      }
      .link {
        color: black;
        text-decoration: none;
      }
      .link:hover {
          text-decoration: none;
          color: lightgrey;
      }
      .judul-jurnal {
        color: black;
        font-size: 20px;
        font-weight: 600;
        text-decoration: none;
      }
      .judul-jurnal:hover {
          text-decoration: underline;
      }
      .icon {
        color: white;
        font-size: 30px;
        margin-right: 10px;
        text-decoration: none;
      }
      .icon:hover {
          text-decoration: none;
          color: lightgrey;
      }
      .arab{
        padding-left: 250px;
        padding-top: 20px;
      }
      .guide-title{
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 2px;
      }

      .guide-title::after{
          content: '';
          display: block;
          border-bottom: 2px solid #000000;
          width: 15%;
          /* margin: auto; */
          padding-bottom: 30px;
          margin-bottom: -8px;
      }
      .wall{
        background-image: url(pictures/beranda.png);
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
        position: relative;
        margin-left: 30%;
        margin-top: 5%;
      }
      .wall .container{
        z-index: 1;
        position: relative;
        left: -250px;
      }
    </style>
  </head>
  <body>

  @include('part.navbar')

  @yield('container')

  @include('part.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>