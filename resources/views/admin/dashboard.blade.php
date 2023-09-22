@extends('part.sidebar')

@section('main')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
      </div>
      <!-- <a class="btn btn-primary rounded mb-3" href="/quote/create" role="button"><i class="bi bi-pencil-square"></i> input data admin</a> -->
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user as $data)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $data->name }}</td>
      <td>{{ $data->username }}</td>
      <td>{{ $data->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </main>

@endsection