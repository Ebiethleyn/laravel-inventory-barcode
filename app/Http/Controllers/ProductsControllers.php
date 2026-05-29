<?php

namespace App\Http\Controllers;

class ProductsControllers extends Controller
{
    public function getProducts()
    {
        $data_toko = [
            'nama_toko' => 'Makmur Jaya Abadi',
            'alamat' => 'Gedong, Pasar Rebo',
            'tipe' => 'Ruko',
        ];

        return view('pages.products', $data_toko);

    }

    public function tambahProduct()
    {
        return view('pages.addProduct');
    }

    public function editProduct()
    {
        return view('pages.editProduct');
    }
}
