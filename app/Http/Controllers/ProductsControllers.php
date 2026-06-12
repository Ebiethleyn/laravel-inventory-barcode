<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\{Kategori, products};
// use App\Models\Kategori;


class ProductsControllers extends Controller
{
    public function index(Request $request)
    {
        $toko = [
            'nama_toko' => 'Makmur Jaya Abadi',
            'alamat' => 'Gedong, Pasar Rebo',
            'tipe' => 'Ruko',
        ];
        //menampung keyword pencarian
        $search = $request->keyword;

        //mengambil semua data dari tabel tb_product
        //menggunakan Eloquent
        $produk = products::query()->when($search, function ($query, $search) {
            return $query->where('nama_product', 'like', "%{$search}%");
        })
            ->join('tb_kategori', 'tb_products.kategori_id', '=', 'tb_kategori.id_kategori')
            ->get();

        //query untuk mengambil semua data yg ada di tabel produk
        // $queryBuilder = DB::table('tb_products')->get(); //query  untuk mengambil semua data yg ada di tabel produk


        return view('pages.produk.show', [
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }

    public function create()
    {
        $data_kategori = Kategori::get();
        return view('pages.produk.add', [
            'data' => $data_kategori
        ]);
    }
    public function store(Request $request)
    {
        // memberikan validasi wajib diisi semua
        $request->validate(
            [
                'nama_produk' => 'required|min:3|max:120', //min:8 artinya minimal karakter inputnya adalah 8 dan max 12
                'harga_produk' => 'required|min:4',
                'deskripsi' => 'required',
                'stok' => 'required',
                'kategori' => 'required',
                'gambar' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            // customisasi Pesan Validasi
            [
                //validasi untuk nama
                'nama_produk.required' => 'Nama Produk  Wajib di isi',
                'nama_produk.min' => 'Nama Produk minimal 3 karakter',
                'nama_produk.max' => 'Nama Produk Maksimal 120 karakter',
                //validasi untuk harga
                'harga_produk.required' => 'Harga Produk  Wajib di isi',
                'harga_produk.min' => 'Harga minimal 4 digit',
                //validasi untuk deskripsi
                'deskripsi.required' => 'Deskripsi Produk  Wajib di isi',
                'gambar.mimes' => 'Gambar hanya boleh dengan format jpg,jpeg,png'
            ]
        );
        //membuat nama file gambar yg akan di upload
        $namaFile = Str::random(5) . '.' . $request->gambar->extension();
        // dd($namaFile);
        //ppindahkan gambar ke floder public
        $request->gambar->move(public_path('gambar_produk'), $namaFile);


        // Menambahkan data ke tabel tb_produk
        //menggunakan eloquent orm
        //query tambah data
        products::create([
            'kode_product' => Str::random(10),
            'nama_product' => $request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
            'kategori_id' => $request->kategori,
            'stok' => $request->stok,
            'gambar' => $namaFile
        ]);
        // setelah data berhasil ditambahkan, akan di redirect ke halaman /product dengan memberikan notif data berhasil ditambahakan
        return redirect('/products')->with('pesan', 'Data Berhasil Ditambahkan');
    }
    // method untuk menampilkan detai data berdasarkan id
    public function show($id)
    {
        //Query untuk mengambil data berdasarkan Id yg di kirim melalui URL
        //Panggil Model, dan ditampung di variabel data
        //eloqunt orm
        $data = products::findOrFail($id);
        //untuk Query Builder
        // DB::table('tb_products')->where('id_product', $id)->firstOrFail();
        return view('pages.produk.detail', [
            'xxx' => $data
        ]);
    }

    public function edit($id)
    {
        //mengambil data spesifik darii id yg dikirim dari parameter
        $data = products::findOrFail($id);

        $data_kategori = Kategori::get();


        return view('pages.produk.edit', [
            'data' => $data,
            'kategori' => $data_kategori
        ]);
    }
    public function update($id, Request $request)
    {
        $request->validate(
            [
                'nama_produk' => 'required|min:3|max:120', //min:8 artinya minimal karakter inputnya adalah 8 dan max 12
                'harga_produk' => 'required|min:4',
                'deskripsi' => 'required',
                'stok' => 'required',
                'kategori' => 'required',
                'gambar' => 'image|mimes:jpg,png,jpeg|max:5000',
            ],
            // customisasi Pesan Validasi
            [
                //validasi untuk nama
                'nama_produk.required' => 'Nama Produk  Wajib di isi',
                'nama_produk.min' => 'Nama Produk minimal 3 karakter',
                'nama_produk.max' => 'Nama Produk Maksimal 120 karakter',
                //validasi untuk harga
                'harga_produk.required' => 'Harga Produk  Wajib di isi',
                'harga_produk.min' => 'Harga minimal 4 digit',
                //validasi untuk deskripsi
                'deskripsi.required' => 'Deskripsi Produk  Wajib di isi'
            ]
        );

        if ($request->hasFile('gambar')) {
            $namaFile = Str::random(5) . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar_produk'), $namaFile);
        } else {
            $data_lama = products::findOrFail($id);
            $namaFile = $data_lama->gambar;

            dd($namaFile);
            
        }
        //Query untuk menyimpan data yg telah di update
        products::where('id_product', $id)->update([
            'nama_product' => $request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori
        ]);
        return redirect('/products')->with('pesan', 'Data Berhasil di Update');
    }
    public function destroy($id)
    {
        // Query untuk menghapus data di database
        products::findOrFail($id)->delete();
        return redirect('/products')->with('pesan', 'Data Berhasil di Hapus');
    }
}
