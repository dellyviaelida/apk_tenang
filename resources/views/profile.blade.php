@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 120px;">
<h2>User Profile</h2>

<div class="container border rounded mt-3">

<ul class="nav nav-tabs mt-3">
  <li class="nav-item">
    <a class="nav-link active" href="#user" data-bs-toggle="tab">Profile Akun</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#profile" data-bs-toggle="tab">Edit Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#ubah-password" data-bs-toggle="tab">Ubah Password</a>
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
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="input-nama" value="{{ old('name', auth()->user()->username) }}" required>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" value="{{ old('name', auth()->user()->email) }}" required>
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
    <form class="mt-3">
        <div class="mb-3">
            <label for="password-lama" class="form-label">Password Lama</label>
            <input type="password" class="form-control" id="password-lama">
        </div>
        <div class="mb-3">
            <label for="password-baru" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="password-baru">
        </div>
        <div class="mb-3">
            <label for="confirm-pass" class="form-label">Konfirmasi Password Baru</label>
            <input type="password" class="form-control" id="confirm-pass">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Password</button>
    </form>
    </div>
</div>
</div>

</div>


@endsection