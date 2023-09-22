@extends('layout.main')

@section('container')


<div class="container" style="margin-top: 120px">

<h1 class="mb-4">Hasil Tes</h1>
<div class="card border-0" style="background-color:#F3F3F3;">
  <div class="card-body text-center">
  Hasil menunjukkan bahwa Anda mengalami
  @if ($score <= 13)
    <h2 class="fw-bolder mt-5 mb-5" style="color:#367795">Stress Ringan</h2>
    Kamu relatif tidak mengalami stres yang mengganggu kehidupan sehari-hari. Pertahankan aktivitas yang kamu lakukan selama ini dan tetap jaga kondisi kesehatan mentalmu dengan melakukan meditasi dan menulis jurnal secara rutin ya.
  @elseif ($score >= 14 || $score <= 26)
    <h2 class="fw-bolder mt-5 mb-5" style="color:#367795">Stress Sedang</h2>
    Kamu relatif mengalami stres yang mengganggu kehidupan sehari-hari. Kamu dapat menyalurkan emosimu melalui kegiatan-kegiatan positif seperti curhat, melakukan hobi, berolahraga, meditasi, journaling, dan berdoa kepada Tuhan.
  @else
    <h2 class="fw-bolder mt-5 mb-5" style="color:#367795">Stress Berat</h2>
    Kondisi kamu saat ini memerlukan pemeriksaan profesional. Cobalah untuk melakukan konseling dengan psikolog.
  @endif
    
  </div>
</div>

<h5 class="mt-5 mb-5">Rekomendasi untuk Anda</h5>
Treatment berikut ini mungkin dapat membantu Anda
<div class="d-flex">

@if ($test11==0)
<a class="btn py-3" href="/therapy-meditation" role="button" style="background: #367795; width: 10rem; margin-right: 10px;">
  <img src="pictures/meditasi.jpeg" class="rounded text-center img-fluid" style="object-fit: cover;">
  <h6 class="text-white mt-3">Meditation</h6>
</a>

  @if ($test12=="ya"||$test12=="mungkin")
  <a class="btn py-3" href="/therapy-zikir" role="button" style="background: #367795; width: 10rem; margin-right: 10px;">
    <img src="pictures/zikir.jpg" class="rounded text-center img-fluid" style="object-fit: cover;">
    <h6 class="text-white mt-3">Audio Zikir</h6>
  </a>
  @endif

  @if (($test13=="ya"||$test13=="mungkin") || ($test14=="ya"||$test14=="mungkin"))
  <a class="btn py-3" href="/journal/create" role="button" style="background: #367795; width: 10rem;">
    <img src="pictures/journal.jpg" class="rounded text-center img-fluid" style="object-fit: cover;">
    <h6 class="text-white mt-3">Daily Journal</h6>
  </a>
  @endif

@else

Tidak ada rekomendasi untuk Anda

@endif
</div>

</div>

@endsection