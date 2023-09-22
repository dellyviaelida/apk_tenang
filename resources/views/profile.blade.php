@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
<h2>User Profile</h2>

<div class="container border rounded mt-3">

<ul class="nav nav-tabs mt-3">
  <li class="nav-item">
    <a class="nav-link active" href="/profile#user" data-bs-toggle="tab">Profile Akun</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/profile#profile" data-bs-toggle="tab">Edit Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/profile#ubah-password" data-bs-toggle="tab">Ubah Password</a>
  </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="user">
    <table class="table table-hover mt-3 mb-5">
  
  <tbody>
    <tr>
      <th scope="row" width="200px" height="50px">Nama</th>
      <td>{{ auth()->user()->name }}</td>
    </tr>
    <tr>
      <th scope="row" width="200px" height="50px">Username</th>
      <td>{{ auth()->user()->username }}</td>
    </tr>
    <tr>
      <th scope="row" height="50px">Email</th>
      <td>{{ auth()->user()->email }}</td>
    </tr>
  </tbody>
</table>

    </div>

    <div class="tab-pane mb-3" id="profile">
    <form class="mt-3" action="/profile/{{ auth()->user()->id }}" method="post">
    @method('put')
    @csrf
        <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="input-nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="input-nama" required value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="input-nama" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="input-nama" value="{{ old('username', auth()->user()->username) }}" required>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email', auth()->user()->email) }}" required>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
        </div>
    <div class="d-flex justify-content-center mt-5">
        <button type="submit" class="btn text-white px-5 rounded fw-semibold" style="background-color: #367795;">Simpan Perubahan</button>
    </div>
    </form>
    </div>

    <div class="tab-pane mb-3" id="ubah-password">
    <form class="mt-3" action="/profile" method="post">
        @method('put')
        @csrf
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="mb-3">
            <label for="password-lama" class="form-label">Password Lama</label>
            <input type="password" name="old_password" class="form-control" id="password-lama">
        </div>
        <div class="mb-3">
            <label for="password-baru" class="form-label">Password Baru</label>
            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="password-baru">
            @error('new_password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirm" class="form-label">Konfirmasi Password Baru</label>
            <input type="password" name="new_password_confirmation" class="form-control" id="password-confirm" required>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Password</button>
    </form>
    </div>
</div>
</div>

</div>

@endsection