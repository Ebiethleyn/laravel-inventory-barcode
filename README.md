# 📦 Belajar Laravel - Sistem Manajemen Produk dengan Integrasi Barcode

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![Bootstrap Version](https://img.shields.io/badge/Bootstrap-4.6-purple.svg)](https://getbootstrap.com/)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

Aplikasi web berbasis **Laravel 12** yang dirancang untuk menyederhanakan manajemen inventaris produk secara efisien. Proyek ini mengintegrasikan template dashboard **SB-Admin (Bootstrap 4.6)** untuk antarmuka pengguna yang responsif, serta sistem otomatisasi **Barcode Generator** untuk kebutuhan penomoran produk yang standar dan siap cetak.

Proyek ini dibangun dengan fokus pada penulisan kode yang bersih (*clean code*), penerapan arsitektur MVC (*Model-View-Controller*) yang kokoh, serta penanganan validasi data yang aman di sisi server.

---

## 🚀 Fitur Utama

- **Sistem CRUD Produk Terintegrasi**  
  Manajemen data produk yang lengkap (Tambah, Lihat, Edit, Hapus) dengan retensi data yang aman.

- **Otomatisasi Barcode Generator**  
  Pembuatan kode produk acak 10-digit secara otomatis menggunakan library `milon/barcode`, memudahkan pelacakan barang fisik.

- **Upload Gambar Produk**  
  Penanganan file gambar produk secara dinamis, lengkap dengan validasi ekstensi dan batas ukuran file (*file handling*).

- **Relasi Basis Data Dinamis**  
  Menghubungkan tabel produk dengan tabel kategori barang (*one-to-many relationship*) menggunakan Eloquent ORM.

- **Fitur Pencarian & Filter**  
  Pencarian produk berbasis kata kunci (*keyword search*) secara *real-time* untuk efisiensi navigasi data.

- **UI/UX Bersih & Responsif**  
  Menggunakan SB-Admin yang ramah pengguna, dilengkapi dengan penanganan pesan error/validasi yang informatif.

---

## 🛠️ Stack Teknologi & Library

- **Framework Inti:** Laravel 12.x & PHP 8.4
- **Frontend:** SB-Admin Template (Bootstrap 4.6), Blade Templating Engine
- **Barcode Generator:** [Milon Barcode Generator](https://github.com/milon/barcode)
- **Database:** MySQL / MariaDB
- **ORM:** Eloquent ORM
- **Migration:** Laravel Migrations

---

## 💻 Struktur Kode & Praktik Terbaik

Aplikasi ini mengimplementasikan standar pengembangan Laravel modern:

### 🔒 Mass Assignment Protection
Keamanan data menggunakan properti `$fillable` pada Model guna mencegah injeksi data ilegal.

### ✅ Server-side Validation
Validasi input yang ketat pada Controller untuk memastikan integritas data, seperti:

- Validasi kode unik produk
- Validasi ukuran file gambar
- Validasi tipe data numerik
- Validasi field wajib (*required*)

### 🧩 Clean Routing & Controller
Pemisahan logika bisnis yang rapi pada Controller untuk menjaga kode tetap modular dan mudah dirawat (*maintainable*).

---

## ⚙️ Petunjuk Instalasi Lokal

Ikuti langkah berikut untuk menjalankan proyek di komputer lokal (disarankan menggunakan Laragon atau XAMPP).

### 1. Clone Repository

```bash
git clone https://github.com/Ebiethleyn/belajar-laravel.git
cd belajar-laravel
```

### 2. Install Dependensi PHP

```bash
composer install
```

### 3. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`.

```bash
cp .env.example .env
```

Kemudian sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=belajar-laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Migrasi Database

Pastikan database bernama **belajar-laravel** sudah dibuat.

```bash
php artisan migrate
```

### 6. Jalankan Aplikasi

```bash
php artisan serve
```

Akses aplikasi melalui browser:

```text
http://127.0.0.1:8000
```

---

## 📂 Struktur Database

### Tabel Kategori

| Field | Tipe |
|---------|---------|
| id | bigint |
| nama_kategori | varchar |
| created_at | timestamp |
| updated_at | timestamp |

### Tabel Produk

| Field | Tipe |
|---------|---------|
| id | bigint |
| nama_product | varchar |
| kode_produk | varchar |
| harga | integer |
| gambar | varchar |
| deskripsi_produk | text |
| kategori_id | bigint |
| created_at | timestamp |
| updated_at | timestamp |

### Relasi

```php
// Product.php
public function kategori()
{
    return $this->belongsTo(Kategori::class);
}
```

```php
// Kategori.php
public function products()
{
    return $this->hasMany(Product::class);
}
```

---

## 📸 Fitur Barcode

Barcode dibuat secara otomatis menggunakan package:

```bash
composer require milon/barcode
```

Contoh penggunaan:

```php
{!! DNS1D::getBarcodeHTML($product->kode_produk, 'C128') !!}
```

Format barcode yang digunakan adalah **Code 128**, salah satu standar industri yang umum digunakan untuk sistem inventaris.

---

## ✉️ Kontak & Kolaborasi

Proyek ini dikembangkan sebagai media pembelajaran dan eksplorasi fitur-fitur Laravel.

Jika Anda memiliki pertanyaan, saran, atau ingin berkolaborasi, silakan hubungi:

- **GitHub:** https://github.com/Ebiethleyn
- **LinkedIn:** [Ebieth Leyn](https://www.linkedin.com/in/ebieth-leyn-57376320a/)

---

## 📄 License

Project ini menggunakan lisensi **MIT License**.
