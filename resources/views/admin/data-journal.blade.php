@extends('part.sidebar')

@section('main')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Journal</h1>
      </div>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Judul</th>
      <th scope="col" class="col-6">Isi jurnal</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($journal as $data)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $data->user->name }}</td>
      <td>{{ $data->title }}</td>
      <td class="col-6">{{ $data->content }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </main>

@endsection