@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px">
    <a type="button" class="btn btn-lg text-white text-start" href="/journal" style="background-color: #367795;"><span class="fw-bold">My Journal</span> <br><span class="fw-lighter">Lihat jurnalmu disini!</span></a>
    <h1 class="mt-3">Apa itu jurnal?</h1>
    <p class="intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi provident quaerat possimus officiis deserunt voluptas in vero quo dolore dolorum, sequi, beatae tempora incidunt quis quia impedit aut dicta nisi</p>
    <form class="mb-5" action="/journal" method="post">
        @csrf
        <input type="hidden" name="title" class="form-control" id="title" value="My Journal">
        <div class="form-floating">
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 600px"></textarea>
            <label for="floatingTextarea2">Journal</label>
            @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-lg text-white mt-3 px-5" style="background-color: #367795;">SELESAI</button>
        </div>
    </form>
</div>

@endsection