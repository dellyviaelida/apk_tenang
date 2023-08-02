@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px">
    <a type="button" class="btn btn-lg text-white text-start" href="/journal" style="background-color: #367795;"><span class="fw-bold">My Journal</span> <br><span class="fw-lighter">Lihat jurnalmu disini!</span></a>

    <form action="/journal/{{ $journal->id }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan Judul" value="{{ old('title', $journal->title) }}" required>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 600px">{{ old('content', $journal->content) }}</textarea>
            <label for="floatingTextarea2">Journal</label>
            @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-lg text-white mt-3 px-5" style="background-color: #367795;">Update</button>
        </div>
    </form>
</div>

@endsection