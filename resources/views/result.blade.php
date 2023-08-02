@extends('layout.main')

@section('container')


<div class="container" style="margin-top: 120px">

<h1 class="mb-4">Hasil Tes</h1>
<div class="card border-0" style="background-color:#F3F3F3;">
  <div class="card-body text-center">
  Hasil menunjukkan bahwa Anda mengalami
  @if ($score <= 13)
    <h2 class="fw-bolder mt-5 mb-5" style="color:#367795">Stress Ringan</h2>
    Anda relatif tidak mengalami stres yang dapat mengganggu aktifitas harian Anda.
  @elseif ($score >= 14 || $score <= 26)
    <h2 class="fw-bolder mt-5 mb-5" style="color:#367795">Stress Sedang</h2>
    Anda relatif tidak mengalami stres yang dapat mengganggu aktifitas harian Anda.
  @else
    <h2 class="fw-bolder mt-5 mb-5" style="color:#367795">Stress Berat</h2>
    Anda mengalami stres yang dapat mengganggu aktifitas harian Anda.
  @endif
    
  
  </div>
</div>

<p class="mt-5">Rekomendasi untuk Anda</p>


</div>

@endsection