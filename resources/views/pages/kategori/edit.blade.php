@extends('layouts.master')
@section('title', 'Edit Kategori')
@section('konten')
    <h1>Edit Data Kategori</h1>
    <hr>
    <div class="card">
        <div class="card-header">Edit Data Kategori Produk</div>
        <div class="card-body">
            <form action="/kategori/{{ $data->id_kategori }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" value="{{ $data->nama_kategori }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Kategori</label>
                    <textarea class="form-control" name="deskripsi_kategori" rows="3">{{ $data->deskripsi }}</textarea>
                </div>
                <div class="col-sm-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
