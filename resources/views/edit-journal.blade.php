@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
<form class="mt-5" action="">
<input type="text" class="form-control fw-bold" id="input-nama" value="My Daily Journal">
<p class="mt-3">Ditulis pada hari, tanggal tahun  pukul 00.00</p>
<div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 600px"></textarea>
        <label for="floatingTextarea2">Journal</label>
    </div>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-lg text-white mt-3 px-5" style="background-color: #367795;">Simpan Perubahan</button>
</div>

</form>

</div>

@endsection