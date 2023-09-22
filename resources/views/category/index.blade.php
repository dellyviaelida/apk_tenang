@extends('part.sidebar')

@section('main')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Kategori Meditasi</h1>
      </div>
      <a class="btn btn-primary rounded mb-3" href="/category/create" role="button"><i class="bi bi-pencil-square"></i> input data</a>

      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Image</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category as $data)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $data->name }}</td>
      <td>
        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->image }}" height="100px">
      </td>
      <td>
        <div class="d-inline-flex">
          <a class="btn btn-primary rounded" href="/category/{{ $data->id }}/edit" role="button">
            <i class="bi bi-pencil-square"></i> edit
          </a>
          <form class="mx-3" action="/category/{{ $data->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger rounded"><i class="bi bi-trash"></i> delete</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </main>

@endsection