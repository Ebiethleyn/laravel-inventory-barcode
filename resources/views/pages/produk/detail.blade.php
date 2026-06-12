@extends('layouts.master')
@section('title', 'Halaman Detail Product')

@section('konten')
    <div class="card">
        <div class="card-header ">
            Detail Produk
        </div>
        <div class="card-body">
            @if ($xxx->gambar == null)
                <p>Gambar tidak ada</p>
            @else
                <img src="{{ asset('gambar_produk/' . $xxx->gambar) }}" class="img-fluid" width="200" alt="...">
            @endif
            <p>Nama Produk : {{ $xxx->nama_product }}</p>
            <p>Harga Produk : Rp. {{ $xxx->harga }}</p>
            <p>Kategori Produk : Barang Elektronik</p>
            <p>Deskripsi Produk : {{ $xxx->deskripsi_produk }}</p>
            <p>Stok Produk : 3 pcs</p>
            <a href="/products" class="btn btn-primary">Kembali ke Produk</a>
        </div>
    </div>
@endsection
