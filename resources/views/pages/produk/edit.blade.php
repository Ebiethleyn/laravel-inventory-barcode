@extends('layouts.master')
@section('title', 'Edit Product')
@section('konten')
    <div class="card">
        <div class="card-header">Update Data Produk</div>
        <div class="card-body">
            <form action="/products/{{ $data->id_product }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6">
                        @if ($data->gambar == null)
                            <p>Gambar tidak ada</p>
                        @else
                            <img src="{{ asset('gambar_produk/' . $data->gambar) }}" class="img-fluid" width="200"
                                alt="...">
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}">
                            {{--  validasi input  --}}
                            <div class="form-text text-muted">*Isi bagian ini jika ingin mengganti gambar</div>
                            @error('gambar')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{ $data->nama_product }}">
                            {{--  validasi input  --}}
                            @error('nama_produk')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga_produk" class="form-control" value="{{ $data->harga }}">
                            @error('harga_produk')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{ $data->stok }}">
                            @error('stok')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="custom-select" aria-label="Default select example" name="kategori">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id_kategori }}"
                                        {{ $item->id_kategori == $data->kategori_id ? 'selected' : '' }}>
                                        {{ $item->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <label>Deskripsi Produk</label>
                            <textarea class="form-control" name="deskripsi" style="height: 100px">{{ $data->deskripsi_produk }}</textarea>
                        </div>
                        @error('deskripsi')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
