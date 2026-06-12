<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kategori')->insert([
            [
                'nama_kategori' => 'Elektronik',
                'deskripsi' => 'barang elektrnik'
            ],
            [
                'nama_kategori' => 'Rumah Tangga',
                'deskripsi' => 'barang rumah tangga'
            ]
        ]);
        // Query menambah data
        DB::table('tb_products')->insert([
            [
                'kode_product' => 'A001',
                'nama_product' => 'Smart TV Samsung',
                'harga' => 1500000,
                'deskripsi_produk' => 'ini adalah sebuah deskripsi dummy',
                'stok' => 100,
                'kategori_id' => 1,
                'created_at' => now()
            ],
            [
                'kode_product' => 'A002',
                'nama_product' => 'Apple Watch',
                'harga' => 100000,
                'deskripsi_produk' => 'ini adalah sebuah deskripsi dummy',
                'stok' => 10,
                'kategori_id' => 2,
                'created_at' => now()
            ],
        ]);
    }
}
