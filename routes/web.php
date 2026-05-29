<?php

use App\Http\Controllers\ProductsControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/about', function () {
    $biodata = [
        'nama' => 'Sandur',
        'umur' => 50,
        'alamat' => 'indonesia'
    ];
    return view('pages.about', $biodata);
});

Route::get('/about/{id}', function($id){
return view('pages.detail',[
    'nomor'=> $id
]);
});

Route::view('/contact', 'pages.contact');
// Route::view('/products', 'pages.products');
// Route::view('/about', 'pages.about');

// routes controller products
Route::get('/products',[ProductsControllers::class,'getProducts']);
Route::get('/products/tambah',[ProductsControllers::class,'tambahProduct']);
Route::get('/products/edit',[ProductsControllers::class,'editProduct']);