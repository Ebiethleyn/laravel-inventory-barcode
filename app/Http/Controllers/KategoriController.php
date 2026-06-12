<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        //ambil semua data -> get()
        $kategori = Kategori::get();
        return view('pages.kategori.show', compact('kategori'));
    }
    public function create()
    {

        return view('pages.kategori.add');
    }
    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi_kategori
        ]);

        return redirect('/kategori')->with('pesan', 'kategori berhasil ditambah');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //mengambil data spesifik darii id yg dikirim dari parameter
        $data = Kategori::findOrFail($id);
        // dd($data);

        return view('pages.kategori.edit', [
            'data' => $data,
        ]);
    }
    public function update(Request $request, string $id)
    {
        Kategori::where('id_kategori', $id)->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi_kategori
        ]);
        return redirect('/kategori');
    }
    public function destroy(string $id)
    {
        Kategori::findOrFail($id)->delete();
        return redirect('/kategori');
    }
}
