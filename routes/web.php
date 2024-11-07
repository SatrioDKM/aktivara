<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\NotificationController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/buatLaporan', function () {
    return view('createReport');
});

Route::get('/daftarLaporan', function () {
    // Buat data dummy laporan harian
    $laporan = [
        [
            'deskripsi' => 'Membersihkan ruang aula',
            'lokasi' => 'Gedung A - Aula',
            'tanggal' => '2024-11-01',
        ],
        [
            'deskripsi' => 'Memperbaiki AC di ruang 101',
            'lokasi' => 'Gedung B - Ruang 101',
            'tanggal' => '2024-11-02',
        ],
        [
            'deskripsi' => 'Mengganti lampu di koridor utama',
            'lokasi' => 'Gedung C - Koridor',
            'tanggal' => '2024-11-03',
        ],
        [
            'deskripsi' => 'Membersihkan taman depan gedung',
            'lokasi' => 'Halaman Depan',
            'tanggal' => '2024-11-04',
        ],
    ];

    // Kirim data ke view langsung dari route
    return view('listReports', compact('laporan'));
});

Route::get('/laporan/export-pdf', function () {
    // Logika untuk ekspor PDF, bisa menggunakan library seperti DomPDF atau Snappy PDF
    return response('Fungsi Ekspor PDF akan disini.');
});


Route::get('/assets', [AssetController::class, 'index'])->name('assets.index');
Route::resource('assets', AssetController::class);

// Route untuk menampilkan halaman notifikasi
Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');
