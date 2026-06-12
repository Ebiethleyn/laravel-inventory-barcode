@extends('layouts.master')
@section('title', 'Daftar Products')
@section('konten')
    <hr><a href="/products/create"><button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    </a>
    <div class="alert alert-primary">
        <b>Nama Toko : </b>{{ $data_toko['nama_toko'] }}
        <br>
        <b>Alamat : </b> {{ $data_toko['alamat'] }}
        <br>
        <b>Tipe : </b>{{ $data_toko['tipe'] }}
    </div>
    {{--  mengirim notifikasi jika data berhasil ditambahkan --}}
    @if (session('pesan'))
        <div class="alert alert-primary">{{ session('pesan') }}</div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            Daftar Products
            <div class="d-flex gap-2">
                @if (Request()->keyword != '')
                    <a href="/products" class="btn btn-info">Reset</a>
                @endif
                <form class="input-group mb-3" style="width: 350px">
                    <input type="text" class="form-control" value="{{ Request()->keyword }}" name="keyword"
                        placeholder="Cari Data Produk" aria-label="Recipient’s username" aria-describedby="button-addon2">
                    <button class="btn btn-success" type="submit" id="button-addon2">Cari Data</button>
                </form>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    {{--  perulangan menggunakan intax blade  --}}

                    @forelse ($data_produk as $item)
                        <tr>
                            {{--  untuk membuat nomor, blade sudah menyediakan iteration  --}}
                            <th scope="row">{{ $loop->iteration }}</th>

                            {{-- <td>{{ $item->kode_product }}</td> --}}
                            <td>{!! DNS1D::getBarcodeHTML($item->kode_product, 'C39', 1, 50) !!}</td>
                            <td>{{ $item->nama_product }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>
                                <a href="/products/{{ $item->id_product }}"class="btn btn-info">Detail</a>
                                <a href="/products/{{ $item->id_product }}/edit" class="btn btn-warning">Edit</a>
                                {{--  <button type="button"class="btn btn-danger">Hapus</button>  --}}
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#hapus{{ $item->id_product }}">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Data yang anda cari tidak tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{--  Modal  --}}
    @foreach ($data_produk as $item)
        <!-- Modal -->
        <div class="modal fade" id="hapus{{ $item->id_product }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="/products/{{ $item->id_product }}" method="POST" class="modal-content">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin menghapus produk <b>{{ $item->nama_product }}</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
