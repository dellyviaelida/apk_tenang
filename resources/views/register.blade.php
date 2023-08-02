@extends('layout.master')

<div class="container">
    <div class="text-center mt-5 mb-5">
        <h1>Registrasi</h1>
        <p>Sudah punya akun? <a href="/login" class="fw-bold" style="color: #367795; text-decoration: none;">Login</a></p>
    </div>
    
    <form action="/registration" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!-- <div class="mb-3">
                    <label for="input-gender" class="form-label">Gender</label> <br>
                    <div class="form-check">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value="male">
                        <label class="form-check-label" for="gender">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value="female">
                        <label class="form-check-label" for="gender">Perempuan</label>
                        @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="place-of-birth" class="form-label">Tempat Lahir</label>
                    <input type="text" name="place_of_birth" class="form-control @error('place_of_birth') is-invalid @enderror" id="place-of-birth" required value="{{ old('place_of_birth') }}">
                    @error('place_of_birth')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date-of-birth" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" id="date-of-birth" required value="{{ old('date_of_birth') }}">
                    @error('date_of_birth')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No. HP</label>
                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required value="{{ old('phone') }}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" required value="{{ old('address') }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> -->
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" required>
                </div>
            </div>
        </div>
    <div class="d-flex justify-content-center mt-5">
        <button type="submit" class="btn text-white px-5 rounded-pill fw-bold" style="background-color: #367795;">Register</button>
    </div>
    
    </form>

</div>