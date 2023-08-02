@extends('part.sidebar')

@section('main')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Zikir</h1>
      </div>
      <a class="btn btn-primary rounded" href="/zikir/create" role="button"><i class="bi bi-pencil-square"></i> input data</a>

      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">File</th>
      <th scope="col" class="col-6">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($zikir as $data)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $data->title }}</td>
      <td>
        <audio controls>
          <source src="{{ asset('storage/' . $data->file) }}">
        </audio>
        {{ $data->file }}
      </td>
      <td class="col-6">{{ $data->desc }}</td>
      <td>
      <a class="btn btn-primary rounded" href="/zikir/{{ $data->id }}/edit" role="button"><i class="bi bi-pencil-square"></i> edit</a>
      <!-- <a class="btn btn-danger rounded" href="#" role="button"><i class="bi bi-trash"></i> delete</a> -->
      <form action="/zikir/{{ $data->id }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger rounded"><i class="bi bi-trash"></i> delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </main>

@endsection