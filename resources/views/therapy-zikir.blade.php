@extends('layout.main')

@section('container')

<div class="container mb-5" style="margin-top: 100px;">
<div class="row gy-5 text-white">
  @foreach ($zikir as $data)
  <div class="col-sm-5">
    <div class="card" style="background: #367795; height: 15rem;">
      <div class="card-body d-flex flex-column">
        <h3 class="pt-2 text-end">{{ $data->title }}</h3>
      <h5 class="card-title">{{ $data->desc }}</h5>
        <!-- <a class="icon" href="{{ asset('storage/' . $data->file) }}" target="_blank">
        <i class="bi bi-play-fill"></i>
        </a> -->
        <div class="text-center">
        <audio src="{{ asset('storage/' . $data->file) }}" controls style="width: 80%;"></audio>
        </div>
        
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>

@endsection