@extends('layouts.master')
@section('title', 'Halaman Products')

@section('konten')
    <h3>Daftar Product Kami..!</h3>
    <hr><a href="/products/tambah"><button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    </a>
    <div class="alert alert-primary">
        <b>Nama Toko : </b>{{ $nama_toko }}
        <br>
        <b>Alamat : </b> {{ $alamat }}
        <br>
        <b>Tipe : </b>{{ $tipe }}
    </div>
    <div class="card">
        <div class="card-header ">
            Daftar Products
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nama Barang</td>
                        <td>100</td>
                        <td>Rp. 7.000.000</td>
                        <td>
                            <a href="products/edit"><button type="button" class="btn btn-warning">Edit</button></a>

                            <button type="button"class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
