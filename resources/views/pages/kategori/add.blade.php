@extends('layouts.master')
@section('title', 'Tambah Kategori')
@section('konten')
    <h1>Tambah Data Kategori</h1>
    <hr>
    <div class="card">
        <div class="card-header">Tambah Data Kategori Produk</div>
        <div class="card-body">
            <form action="/kategori" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Kategori</label>
                    <textarea class="form-control" name="deskripsi_kategori" rows="3"></textarea>
                </div>
                <div class="col-sm-12 mt-3">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
