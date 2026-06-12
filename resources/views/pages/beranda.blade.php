@extends('layouts.master')
@section('title', 'Dashboard')
@section('konten')

    <!-- Content Row (Cards Statistik) -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pendapatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 45.000.000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Pesanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1.234</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Produk
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">356</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Pengguna</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">89</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row (Welcome Card & Chart) -->
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Selamat Datang di Our Store!</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Aksi Cepat:</div>
                            <a class="dropdown-item" href="#"><i class="fas fa-plus fa-sm fa-fw mr-2"></i> Tambah
                                Produk</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-chart-line fa-sm fa-fw mr-2"></i> Lihat
                                Laporan</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-store fa-4x text-gray-300 mb-3"></i>
                        <h4>Halo, Admin!</h4>
                        <p class="text-gray-800">Selamat datang kembali di dashboard <strong>Our Store</strong>.</p>
                        <p class="text-muted">Hari ini adalah hari yang baik untuk menjual lebih banyak produk. Semangat
                            bekerja! 💪</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-primary" role="alert">
                                <i class="fas fa-tags mr-2"></i> Promo akhir bulan diskon 20%!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-truck mr-2"></i> Pengiriman gratis min belanja Rp 200k
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Kelola Toko Sekarang</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mini Chart / Info -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Cepat</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="small text-gray-500">Penjualan Hari Ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 2.500.000</div>
                        <div class="progress mt-2" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="small text-success mt-1"><i class="fas fa-arrow-up"></i> +15% dari kemarin</div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-gray-500">Target Bulan Ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 45jt / Rp 60jt</div>
                        <div class="progress mt-2" style="height: 8px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="small text-info mt-1">75% tercapai</div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-gray-500">Pengunjung Hari Ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">482</div>
                        <div class="progress mt-2" style="height: 8px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 48%"
                                aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="small text-warning mt-1"><i class="fas fa-arrow-up"></i> +8% dari kemarin</div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail Laporan →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row (Produk Terbaru & Aktivitas) -->
    <div class="row">
        <!-- Produk Terbaru -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">🆕 Produk Terbaru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kaos Polos Premium</td>
                                    <td>Rp 89.000</td>
                                    <td>45</td>
                                    <td><span class="badge badge-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>Jaket Hoodie</td>
                                    <td>Rp 199.000</td>
                                    <td>12</td>
                                    <td><span class="badge badge-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>Topi Baseball</td>
                                    <td>Rp 49.000</td>
                                    <td>28</td>
                                    <td><span class="badge badge-warning">Habis</span></td>
                                </tr>
                                <tr>
                                    <td>Celana Chino</td>
                                    <td>Rp 149.000</td>
                                    <td>8</td>
                                    <td><span class="badge badge-success">Aktif</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary mt-2">Lihat Semua Produk →</a>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">📋 Aktivitas Terbaru</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-shopping-cart text-success fa-fw mr-3"></i>
                            <div class="flex-grow-1">
                                <strong>Pesanan baru #INV-001</strong>
                                <div class="small text-muted">2 menit yang lalu</div>
                            </div>
                            <span class="badge badge-primary">Proses</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-user text-info fa-fw mr-3"></i>
                            <div class="flex-grow-1">
                                <strong>Member baru mendaftar</strong>
                                <div class="small text-muted">15 menit yang lalu</div>
                            </div>
                            <span class="badge badge-success">New</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-star text-warning fa-fw mr-3"></i>
                            <div class="flex-grow-1">
                                <strong>Ulasan produk baru ⭐⭐⭐⭐⭐</strong>
                                <div class="small text-muted">1 jam yang lalu</div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-truck text-primary fa-fw mr-3"></i>
                            <div class="flex-grow-1">
                                <strong>Pengiriman pesanan #INV-002</strong>
                                <div class="small text-muted">3 jam yang lalu</div>
                            </div>
                            <span class="badge badge-info">Dikirim</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-dollar-sign text-danger fa-fw mr-3"></i>
                            <div class="flex-grow-1">
                                <strong>Penjualan hari ini: Rp 2.5jt</strong>
                                <div class="small text-muted">Target tercapai 75%</div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm btn-outline-secondary">Lihat Semua Aktivitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row (Quick Actions & Quote of the Day) -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="mb-2">💡 Yuk, tingkatkan penjualan Anda hari ini!</h5>
                            <p class="text-muted mb-0">Gunakan fitur promosi dan diskon untuk menarik lebih banyak
                                pelanggan.</p>
                        </div>
                        <div class="col-md-4 text-md-right mt-3 mt-md-0">
                            <button class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-tags"></i>
                                </span>
                                <span class="text">Buat Promo Sekarang</span>
                            </button>
                            <button class="btn btn-secondary btn-icon-split ml-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-chart-bar"></i>
                                </span>
                                <span class="text">Lihat Analisis</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
