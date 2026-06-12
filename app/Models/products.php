<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    // inisiialisasi nama produk
    protected $table = 'tb_products';

    // inisialisasi primary ke dalam table
    protected $primaryKey = 'id_product';

    // Fillable => untuk menentukan data apa saja yg akan diisi di table ini
    protected $fillable = ['kode_product', 'nama_product', 'harga', 'deskripsi_produk', 'kategori_id', 'stok', 'gambar'];

    // inisialisasi data yg tidak boleh di isi
    protected $guarded = ['id_product'];
}
