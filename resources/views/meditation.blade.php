@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px">


<div class="row gx-5 gy-5 text-white">
@foreach ($meditation as $data)
  <div class="col-sm-4">
    <div class="card" style="background: #367795;">
      <div class="card-body">
        <img src="pictures/takut.jpg" class="rounded text-center img-fluid">
        <h5 class="card-title mt-3"><a class="text-decoration-none text-white" href="/detail-meditation/{{ $data->id }}">{{ $data->title }}</a></h5>
        <p><i class="bi bi-headphones"></i> ... menit</p>
      </div>
    </div>
  </div>
@endforeach

</div>

</div>

@endsection