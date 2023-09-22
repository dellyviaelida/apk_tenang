@extends('part.sidebar')

@section('main')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Quote</h1>
    </div>

    <form action="/quote/{{ $quote->id }}" method="post">
    @method('put')
    @csrf
        <div class="row">
            <div class="col-8">
                <div class="mb-3">
                    <label for="quote" class="form-label">Quote</label>
                    <textarea name="quote" class="form-control @error('quote') is-invalid @enderror" placeholder="Masukkan Quote" id="quote" style="height: 100px">{{ old('quote', $quote->quote) }}</textarea>
                    @error('quote')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col">
                Catatan: <br>
                * bersifat wajib <br>
                ket. bersifat opsional
            </div>
        </div>
        <button type="submit" class="btn text-white px-5 rounded fw-bold" style="background-color: #367795;">Update</button>
    
    </form>

</main>

@endsection