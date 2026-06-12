@extends('layouts.master')
@section('title', 'Halaman Kategori')

@section('konten')
    <a href="/kategori/create" class="btn btn-primary mb-3">Tambah Kategori</a>
    <div class="card">
        <div class="card-header">
            Tabel Kategori
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Deskripsi Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kategori as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                {{--  <div class="btn btn-warning">Edit</div>
                                  --}}
                                <a href="/kategori/{{ $item->id_kategori }}/edit" class="btn btn-warning">Edit</a>
                                {{--  <div class="btn btn-danger">Hapus</div>  --}}
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#hapus{{ $item->id_kategori }}">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Data yang anda cari tidak ada!!!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{--  modal hapus  --}}
    @foreach ($kategori as $item)
        <div class="modal fade" id="hapus{{ $item->id_kategori }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="/kategori/{{ $item->id_kategori }}" method="POST" class="modal-content">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin menghapus kategori <b>{{ $item->nama_kategori }}</b>
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
