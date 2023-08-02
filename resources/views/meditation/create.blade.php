@extends('part.sidebar')

@section('main')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Meditation</h1>
    </div>

    <form action="/meditation" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-8">
                <div class="mb-3">
                    <label for="input-judul" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="input-judul" placeholder="Masukkan Judul">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-file" class="form-label">Kategori</label>
                    <select class="form-select" name="category_id">
                        @foreach ($category as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="input-file" class="form-label">Upload File</label>
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="input-file">
                    @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-keterangan" class="form-label">Keterangan</label>
                    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Masukkan Keterangan" id="input-keterangan" style="height: 100px"></textarea>
                    @error('desc')
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