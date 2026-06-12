<?php

use App\Http\Controllers\KategoriController;
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

Route::get('/about/{id}', function ($id) {
    return view('pages.detail', [
        'nomor' => $id
    ]);
});

Route::view('/contact', 'pages.contact');
// Route::view('/products', 'pages.products');
// Route::view('/about', 'pages.about');
// routes controller products
Route::get('/products', [ProductsControllers::class, 'index']); //read data
// Route untuk menmpilkan form tambah data
Route::get('/products/create', [ProductsControllers::class, 'create']);
//route untuk mengelola data yg telah dikirim dari form data
Route::post('/products', [ProductsControllers::class, 'store']);
Route::get('/products/edit', [ProductsControllers::class, 'editProduct']);
//Route untuk menampilkan detail data by id
Route::get('/products/{id}', [ProductsControllers::class, 'show']);
//Route upddate/edit data
Route::get('/products/{id}/edit', [ProductsControllers::class, 'edit']);
Route::put('/products/{id}', [ProductsControllers::class, 'update']);
//Route menghapus data
Route::delete('/products/{id}', [ProductsControllers::class, 'destroy']);


//membuat routing mennggunakan Resource
Route::resource('kategori', KategoriController::class);
