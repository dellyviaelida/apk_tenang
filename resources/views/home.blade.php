@extends('layout.main')

@section('container')

<div class="jumbotron">
  <div class="container">
  <h1 class="display-4">Mengatasi masalah dengan</h1>
  <p class="lead mt-5 nama-aplikasi" style="margin-left: 100px;">Tenang</p>
  <p class="mt-4 judul">Kami menyediakan therapy untuk mahasiswa 
    <br>dalam upaya untuk mengurangi stres saat mengerjakan 
    <br>skripsi. Therapy terdiri dari dua jenis yaitu <span class="fw-bold fst-italic">Meditation</span> dan <span class="fw-bold fst-italic">Zikir</span>
    <br>Yuk cek kesehatan mentalmu disini!</p>
    <br><a class="btn btn-dark rounded-pill px-4" href="/test" role="button">Mulai Tes</a>
  </div>
</div>

<!-- carousel -->
<div id="carouselExampleAutoplaying" class="container carousel carousel-dark slide" data-bs-ride="carousel" style="margin-top:150px; margin-bottom:180px;">
  <div class="carousel-inner">
    @foreach ($quote as $data)
    <div class="carousel-item {{ ($data->id === 1) ? 'active' : '' }}">
      <h3 class="motivation">{{ $data->quote }}</h3>
    </div>
    @endforeach
  </div>
  <!-- <div class="button-slide">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div> -->
  
</div>

<div class="container-fluid mt-3 mb-4" style="background: #367795; padding-bottom:50px;">
  <div class="container pt-4">
    <h1 class="text-white text-center mb-5">Meditasi</h1>
  <div class="row gy-5 text-white">
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
        <img src="pictures/stres.jpg" class="rounded">
      </div>
      <p class="text">Stress</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
        <img src="pictures/overthinking.jpg" class="rounded">
      </div>
      <p class="text">Overthinking</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
      <img src="pictures/waktu.jpg" class="rounded">
      </div>
      <p class="text">Mengatur Waktu</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
      <img src="pictures/relax.jpg" class="rounded">
      </div>
      <p class="text">Relax</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
      <img src="pictures/pd.jpg" class="rounded">
      </div>
      <p class="text">Membangun Percaya Diri</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
        <img src="pictures/takut.jpg" class="rounded">
      </div>
      <p class="text">Mengendalikan Ketakutan</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
      <img src="pictures/malas.jpg" class="rounded">
      </div>
      <p class="text">Malas</p>
    </div>
    <div class="col-sm-3 text-center">
      <div class="card border-white bg-transparent">
      <img src="pictures/fokus.jpg" class="rounded">
      </div>
      <p class="text">Fokus</p>
    </div>
  </div>
  </div>
  
</div>

<div class="container">
<section id="guide" style="padding-top: 50px;">

<!-- <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel" style="margin-left: 170px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
        <div class="card cards mb-3 border-1 h-30" style="width: 80%;">
        <img src="pictures/pengertian.jpg" class="card-img rounded-start" alt="...">
        <h4 class="card-title text-uppercase fw-semibold" style="color: #ffb606;">Apa itu meditasi?</h4>
        </div>
      </div>
    </div> -->

  <div id="carouselExampleControls" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card border-0" style="width: 80%; margin-left: 10%;">
      <a class="btn text-start " href="/guide/meditasi" role="button" style="width: 100%; height: 25rem;">
      <div class="guide-img">
        <img src="pictures/pengertian.jpg" class="card-img img-fluid" alt="..." style="object-fit: cover;">
      </div>
      <div class="card-img-overlay">
        <h4 class="card-title fw-semibold px-5 pt-5">Apa itu <br>Meditasi</h4>
      </div>
      </a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-0" style="width: 80%; margin-left: 10%;">
      <a class="btn text-start " href="/guide/burnout" role="button" style="width: 100%; height: 25rem;">
      <div class="guide-img">
        <img src="pictures/burnout.jpg" class="card-img img-fluid" alt="..." style="object-fit: cover;">
      </div>
      <div class="card-img-overlay">
        <h4 class="card-title fw-semibold px-5 pt-5">Gejala burnout</h4>
      </div>
      </a>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <div class="card border-0" style="width: 80%; margin-left: 10%;">
      <a class="btn text-start " href="/guide" role="button" style="width: 100%; height: 60%;">
      <div class="guide-img">
        <img src="pictures/pengertian.jpg" class="card-img" alt="...">
      </div>
      <div class="card-img-overlay">
        <h4 class="card-title fw-semibold px-5 pt-5">Apa itu <br>...</h4>
      </div>
      </a>
      </div>
    </div> -->
  </div>
  </div>
    
  

</section>
  
<section id="about" style="padding-top: 30px;">
  <div class="row">
    <div class="col">
      <h1 class="fw-bold mt-5">Tenang adalah Aplikasi Kesehatan Mental Khusus Mahasiswa Tingkat Akhir</h1>
        <p class="intro mt-4">
        Bertujuan untuk mengurangi stres pada mahasiswa tingkat dalam mengerjakan tugas akhir/skripsi</p>
    </div>
    <div class="col video">
      <img src="pictures/fokus.jpg" alt="" height="500px">
      <p class="intro">Aplikasi ini masih dalam tahap pengebangan sehingga saran sangat dibutuhkan dalam pengembangan aplikasi ini semakin baik lagi.</p>
    </div>
  </div>
</section>
  
</div>

@endsection
