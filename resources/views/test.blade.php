@extends('layout.main')

@section('container')

<div class="container" style="margin-top: 100px;">
<h2>Tes Perceived Stress Scale (PSS)</h2>
<p>Tes Perceived Stress Scale (PSS) ini membantu Anda untuk memberikan gambaran tingkatan stres yang Anda miliki. Jawablah semua pertanyaan dibawah ini dengan jujur.</p>
<form action="/test" method="post">
    @csrf
<div class="card">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 1</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa kesal karena sesuatu yang terjadi secara tak terduga?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test1') is-invalid @enderror" type="radio" name="test1" id="Radio1" value="4">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test1') is-invalid @enderror" type="radio" name="test1" id="Radio2" value="3">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test1') is-invalid @enderror" type="radio" name="test1" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test1') is-invalid @enderror" type="radio" name="test1" id="Radio4" value="1">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test1') is-invalid @enderror" type="radio" name="test1" id="Radio5" value="0">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 2</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa tidak mampu mengendalikan hal-hal penting dalam hidup?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test2') is-invalid @enderror" type="radio" name="test2" id="Radio1" value="4">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test2') is-invalid @enderror" type="radio" name="test2" id="Radio2" value="3">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test2') is-invalid @enderror" type="radio" name="test2" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test2') is-invalid @enderror" type="radio" name="test2" id="Radio4" value="1">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test2') is-invalid @enderror" type="radio" name="test2" id="Radio5" value="0">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test2')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 3</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa gugup dan stres?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test3') is-invalid @enderror" type="radio" name="test3" id="Radio1" value="4">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test3') is-invalid @enderror" type="radio" name="test3" id="Radio2" value="3">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test3') is-invalid @enderror" type="radio" name="test3" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test3') is-invalid @enderror" type="radio" name="test3" id="Radio4" value="1">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test3') is-invalid @enderror" type="radio" name="test3" id="Radio5" value="0">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test3')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 4</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa percaya diri terhadap kemampuan Anda untuk menangani masalah pribadi?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test4') is-invalid @enderror" type="radio" name="test4" id="Radio1" value="0">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test4') is-invalid @enderror" type="radio" name="test4" id="Radio2" value="1">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test4') is-invalid @enderror" type="radio" name="test4" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test4') is-invalid @enderror" type="radio" name="test4" id="Radio4" value="3">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test4') is-invalid @enderror" type="radio" name="test4" id="Radio5" value="4">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test4')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 5</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa bahwa hidup Anda berjalan sesuai dengan keinginan Anda?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test5') is-invalid @enderror" type="radio" name="test5" id="Radio1" value="0">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test5') is-invalid @enderror" type="radio" name="test5" id="Radio2" value="1">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test5') is-invalid @enderror" type="radio" name="test5" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test5') is-invalid @enderror" type="radio" name="test5" id="Radio4" value="3">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test5') is-invalid @enderror" type="radio" name="test5" id="Radio5" value="4">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test5')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<!-- <h4><a href="/test2">Selanjutnya <i class="bi bi-arrow-right-circle-fill"></i></a></h4> -->

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 6</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa tidak dapat menangani semua hal yang harus Anda lakukan?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test6') is-invalid @enderror" type="radio" name="test6" id="Radio1" value="4">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test6') is-invalid @enderror" type="radio" name="test6" id="Radio2" value="3">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test6') is-invalid @enderror" type="radio" name="test6" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test6') is-invalid @enderror" type="radio" name="test6" id="Radio4" value="1">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test6') is-invalid @enderror" type="radio" name="test6" id="Radio5" value="0">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test6')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 7</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa mampu mengendalikan hal-hal yang menjengkelkan dalam hidup Anda?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test7') is-invalid @enderror" type="radio" name="test7" id="Radio1" value="0">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test7') is-invalid @enderror" type="radio" name="test7" id="Radio2" value="1">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test7') is-invalid @enderror" type="radio" name="test7" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test7') is-invalid @enderror" type="radio" name="test7" id="Radio4" value="3">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test7') is-invalid @enderror" type="radio" name="test7" id="Radio5" value="4">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test7')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 8</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa dapat mengatasi dan mengendalikan berbagai hal?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test8') is-invalid @enderror" type="radio" name="test8" id="Radio1" value="0">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test8') is-invalid @enderror" type="radio" name="test8" id="Radio2" value="1">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test8') is-invalid @enderror" type="radio" name="test8" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test8') is-invalid @enderror" type="radio" name="test8" id="Radio4" value="3">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test8') is-invalid @enderror" type="radio" name="test8" id="Radio5" value="4">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test8')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor 9</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa marah karena hal-hal yang terjadi di luar kendali Anda?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test9') is-invalid @enderror" type="radio" name="test9" id="Radio1" value="4">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test9') is-invalid @enderror" type="radio" name="test9" id="Radio2" value="3">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test9') is-invalid @enderror" type="radio" name="test9" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test9') is-invalid @enderror" type="radio" name="test9" id="Radio4" value="1">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test9') is-invalid @enderror" type="radio" name="test9" id="Radio5" value="0">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test9')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="card mt-3">
  <div class="card-body" style="margin: 0 50px;">
    <p>Nomor  10</p>
    <p>Dalam satu bulan terakhir, seberapa sering Anda merasa kesulitan-kesulitan dalam hidup menumpuk sedemikian tinggi sehingga Anda tidak dapat mengatasinya?</p>
    <div class="mb-3">
        <div class="form-check mb-2">
            <input class="form-check-input @error('test10') is-invalid @enderror" type="radio" name="test10" id="Radio1" value="4">
            <label class="form-check-label mx-2" for="Radio1">Sangat sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test10') is-invalid @enderror" type="radio" name="test10" id="Radio2" value="3">
            <label class="form-check-label mx-2" for="Radio2">Cukup sering</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test10') is-invalid @enderror" type="radio" name="test10" id="Radio3" value="2">
            <label class="form-check-label mx-2" for="Radio3">Kadang-kadang</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input @error('test10') is-invalid @enderror" type="radio" name="test10" id="Radio4" value="1">
            <label class="form-check-label mx-2" for="Radio4">Hampir pernah</label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('test10') is-invalid @enderror" type="radio" name="test10" id="Radio5" value="0">
            <label class="form-check-label mx-2" for="Radio5">Tidak pernah</label>
            @error('test10')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-end">
<button type="submit" class="btn btn-lg text-white mt-3 px-5" style="background-color: #367795;">SELESAI</button>
</div>

</form>


</div>

@endsection