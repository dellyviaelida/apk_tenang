@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col">
            <h2 class="guide-title">{{ $meditation->title }}</h3>
            <h5 class="mt-5">5 menit</h5>
            <p class="intro" style="margin-top: 40px;">{{ $meditation->desc }}</p>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-dark rounded-pill px-5 mt-3">PLAY</button>
            </div>
        </div>
        <div class="col d-flex justify-content-end">
            <img src="pictures/relax.jpg" alt="" height="500px">
        </div>
    </div>
</div>

@endsection

