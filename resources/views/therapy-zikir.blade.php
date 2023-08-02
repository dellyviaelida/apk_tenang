@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 100px; margin-left: 190px;">
<div class="row gx-5 gy-5 text-white">
  @foreach ($zikir as $data)
  <div class="col-sm-5">
    <div class="card" style="background: #367795; height: 13rem;">
      <div class="card-body">
        <h3 class="arab">{{ $data->title }}</h3>
      <h5 class="card-title">{{ $data->desc }}</h5>
        <a class="icon" href="{{ asset('storage/' . $data->file) }}">
        <i class="bi bi-play-fill"></i>
        </a>
      </div>
    </div>
  </div>
  @endforeach
  <!-- <div class="col-sm-5">
    <div class="card" style="background: #367795; height: 13rem;">
      <div class="card-body">
        <h3 class="arab">اَلْحَمْدُلِلّهِ</h3>
        <h5 class="card-title">Segala puji bagi <br>Allah</h5>
        <a class="icon" href="#">
        <i class="bi bi-play-fill"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card" style="background: #367795; height: 13rem;">
      <div class="card-body">
        <h3 class="arab"> لآإِلَهَ إِلاَّ الله </h3>
      <h5 class="card-title">Tiada tuhan yang <br>berhak disembah <br>selain Allah</h5>
        <a class="icon" href="#">
        <i class="bi bi-play-fill"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card" style="background: #367795; height: 13rem;">
      <div class="card-body">
        <h3 class="arab">ٱللَّٰهُ أَكْبَرُ</h3>
      <h5 class="card-title">Allah Maha Besar</h5>
        <a class="icon" href="#">
        <i class="bi bi-play-fill"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card" style="background: #367795; height: 13rem;">
      <div class="card-body">
        <h3 class="arab">أَسْتَغْفِرُ ٱللَّٰهَ</h3>
      <h5 class="card-title">Aku memohon <br>ampun kepada <br>Allah</h5>
        <a class="icon" href="#">
        <i class="bi bi-play-fill"></i>
        </a>
      </div>
    </div>
  </div> -->
</div>
</div>

@endsection