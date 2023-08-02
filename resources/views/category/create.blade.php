@extends('part.sidebar')

@section('main')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Kategori</h1>
    </div>

    <form action="/category" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-8">
                <div class="mb-3">
                    <label for="nama-kategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nama-kategori" placeholder="Masukkan Judul" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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