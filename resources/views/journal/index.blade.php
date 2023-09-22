@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
<a type="button" class="btn btn-lg text-white text-start" href="/journal/create" style="background-color: #367795;"><span class="fw-bold">My Journal</span> <br><span class="fw-lighter">Tulis jurnalmu disini!</span></a>
<div class="row mt-5">
    <div class="col">
        <h1>Catatan Journalmu <img class="mx-3" src="pictures/notebook.png" alt="" width="50px"></h1>
    </div>
    <div class="col-4">
        <form action="">
            <input type="date" class="form-control">
        </form>
    </div>
</div>

<br>

@foreach ($journal as $data)
<div class="container border rounded mb-4">
    <div class="d-flex mt-3 justify-content-start">
        <div class="p-2" style="margin-right: 50px;">
            <p class="text">{{ $data->created_at->format('l, j-M-Y H:i') }}</p>
        </div>
        <div class="p-2 flex-grow-1">
            <a class="judul-jurnal" href="/journal/{{ $data->id }}">{{ $data->title }}</a>
        </div>
        <div class="p-2">
            <div class="dropdown">
                <a class="text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </a>
                
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/journal/{{ $data->id }}">Lihat</a></li>
                    <li><a class="dropdown-item" href="/journal/{{ $data->id }}/edit">Edit</a></li>
                    <li>
                        <form action="/journal/{{ $data->id }}" class="text-start" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="dropdown-item">Hapus</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach

</div>

@endsection