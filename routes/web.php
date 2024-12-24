<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman tambah mahasiswa
Route::get('/mahasiswa/create', function () {
    return view('mahasiswa.create');
});

// Route untuk halaman edit mahasiswa (contoh dengan parameter ID)
Route::get('/mahasiswa/{id}/edit', function ($id) {
    // Dummy data untuk testing
    $mahasiswa = (object) [
        'id' => $id,
        'nama' => 'Nama Mahasiswa',
        'nim' => '123456',
        'jurusan' => 'Teknik Informatika'
    ];
    return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
});

// Route untuk halaman daftar mahasiswa
Route::get('/mahasiswa', function () {
    // Dummy data untuk testing
    $mahasiswas = [
        (object) ['id' => 1, 'nama' => 'Mahasiswa 1', 'nim' => '001', 'jurusan' => 'TI'],
        (object) ['id' => 2, 'nama' => 'Mahasiswa 2', 'nim' => '002', 'jurusan' => 'SI'],
    ];
    return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
});

// Resource routes untuk mahasiswa (menggunakan controller untuk operasi CRUD)
Route::resource('mahasiswa', MahasiswaController::class);
