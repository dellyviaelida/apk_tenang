@extends('part.sidebar')

@section('main')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Data</h1>
      </div>

<form>
        <div class="row">
            <div class="col-8">
                <div class="mb-3">
                    <label for="input-judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="input-judul" placeholder="Masukkan Judul">
                </div>
                <div class="mb-3">
                    <label for="input-file" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="input-file">
                </div>
                <div class="mb-3">
                    <label for="input-keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" placeholder="Masukkan Keterangan" id="input-keterangan" style="height: 100px"></textarea>
                </div>
            </div>
            <div class="col">
                Catatan: <br>
                * bersifat wajib <br>
                ket. bersifat opsional
            </div>
        </div>
        <button type="submit" class="btn text-white px-5 rounded fw-bold" style="background-color: #367795;">Input</button>
    
    </form>

</main>

@endsection