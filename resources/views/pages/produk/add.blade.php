@extends('layouts.master')
@section('title', 'Tambah Product')
@section('konten')
    <div class="card">
        <div class="card-header">Tambah Data Produk</div>
        <div class="card-body">
            <form action="/products" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}">
                            {{--  validasi input  --}}
                            @error('gambar')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
                            {{--  validasi input  --}}
                            @error('nama_produk')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga_produk" class="form-control"
                                value="{{ old('harga_produk') }}">
                            @error('harga_produk')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{ old('stok') }}">
                            @error('stok')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="custom-select" aria-label="Default select example" name="kategori">
                                <option value"">Pilih Kategori</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                            {{--  <input type="text" name="harga_produk" class="form-control"
                                value="{{ old('harga_produk') }}">  --}}
                            @error('kategori')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <label>Deskripsi Produk</label>
                            <textarea class="form-control" name="deskripsi" style="height: 100px"></textarea>

                        </div>
                        @error('deskripsi')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
