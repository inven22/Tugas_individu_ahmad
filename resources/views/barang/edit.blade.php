@extends('layouts.tem')
<title>Edit Data</title>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Edit data') }}</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ URL::to('/update/' . $edit->KodeBarang) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="nabar"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Barang   :') }}</label>

                                <div class="col-md-6">
                                    <input id="nabar" type="text"
                                        class="form-control @error('nabar') is-invalid @enderror" name="NamaBarang"
                                        value="{{ $edit->NamaBarang }}" required autocomplete="NamaBarang" autofocus>

                                    @error('nabar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Satuan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Satuan barang  :') }}</label>

                                <div class="col-md-6">
                                    <input type="radio" name="Satuan" value="Pcs">Pcs
                                    <input type="radio" name="Satuan" value="Bungkus">Bungkus

                                    @error('Satuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="harbar"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Harga Satuan   :') }}</label>

                                <div class="col-md-6">
                                    <input id="Hargasatuan" type="number"
                                        class="form-control @error('HargaSatuan') is-invalid @enderror" name="HargaSatuan"
                                        value="{{ $edit->HargaSatuan }}" required autocomplete="penulis" autofocus>

                                    @error('penulis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Stok"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Stok barang  :') }}</label>

                                <div class="col-md-6">
                                    <input id="stok" type="text"
                                        class="form-control @error('Stok') is-invalid @enderror" name="Stok"
                                        value="{{ $edit->Stok }}" required autocomplete="Stok" autofocus>

                                    @error('Stok')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>








                            <br>
                            <center>
                                <div>
                                    <button type="submit">Simpan</button>
                                </div>
                            </center>
                        </form>
                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
