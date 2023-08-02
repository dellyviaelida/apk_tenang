@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
<h1>{{ $journal->title }} <img class="mx-3" src="pictures/notebook.png" alt="" width="50px"></h1>
<div class="row mt-4">
    <div class="col">
        <p>Ditulis pada hari, tanggal tahun  pukul 00.00</p>
    </div>
    <div class="col-3">
        <a type="button" class="btn btn-lg text-white" href="/journal/{{ $journal->id }}/edit" style="background-color: #367795;"><i class="bi bi-pencil-square"></i> Edit</a>
        <!-- <a type="button" class="btn btn-lg btn-danger text-white" href="/journal"><i class="bi bi-trash"></i> Hapus</a> -->
        <form action="/journal/{{ $journal->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-lg btn-danger text-white"><i class="bi bi-trash"></i> Hapus</button>
        </form>
    </div>
</div>

<p class="mt-4">
    {{ $journal->content }}
</p>

</div>

</div>

@endsection