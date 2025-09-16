<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\NomorSuratController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataInformasiController;
use App\Http\Controllers\KegiatanController;
use App\Models\Pegawai;

Route::get('/', function () { return view('welcome');})->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
  Volt::route('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth', 'verified'])->prefix('permintaan')->group(function () {
  Volt::route('/', 'permintaan.index')->name('permintaan');
  Volt::route('add', 'permintaan.add')->name('permintaan.add');
  Volt::route('edit/{id}', 'permintaan.edit')->name('permintaan.edit');
  Route::get('/delete/{id}', [PermintaanController::class, 'delete'])->name('permintaan.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('pegawai')->group(function () {
    Volt::route('/', 'pegawai.index')->name('pegawai');
    Volt::route('add', 'pegawai.add')->name('pegawai.add');  
    Volt::route('edit/{id}', 'pegawai.edit')->name('pegawai.edit'); 
    Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('nomor-surat')->group(function () {
    Volt::route('/', 'nomor-surat.index')->name('nomor-surat');
    //Route::get('/', [NomorSuratController::class, 'index'])->name('nomor-surat');
    Route::get('/add', [NomorSuratController::class, 'add'])->name('nomor-surat.add');  
    Route::post('/store', [NomorSuratController::class, 'store'])->name('nomor-surat.store');     
    Route::get('/edit/{id}', [NomorSuratController::class, 'edit'])->name('nomor-surat.edit');
    Route::patch('/update', [NomorSuratController::class, 'update'])->name('nomor-surat.update');
    Route::get('/delete/{id}', [NomorSuratController::class, 'delete'])->name('nomor-surat.delete');  
});

Route::middleware(['auth', 'verified'])->prefix('kegiatan')->group(function () {
  Volt::route('/', 'kegiatan.index')->name('kegiatan');
  Volt::route('add', 'kegiatan.add')->name('kegiatan.add');
  Volt::route('edit/{id}', 'kegiatan.edit')->name('kegiatan.edit');
  Route::get('/delete/{id}', [KegiatanController::class, 'delete'])->name('kegitatan.delete');
  Volt::route('/search', 'kegiatan.search')->name('kegiatan.search');    
});

Route::middleware(['auth', 'verified'])->prefix('laporan-kinerja')->group(function () {
  Volt::route('/', 'laporan-kinerja.index')->name('laporan-kinerja');
  Volt::route('add', 'laporan-kinerja.add')->name('laporan-kinerja.add');
  Volt::route('edit/{id}', 'laporan-kinerja.edit')->name('laporan-kinerja.edit');
//  Route::get('/delete/{id}', [laporan-kinerjaController::class, 'delete'])->name('kegitatan.delete');
  Volt::route('/search', 'laporan-kinerja.search')->name('laporan-kinerja.search'); 
  Route::get('/pdf/{b}/{t}/{a}', [PegawaiController::class, 'pdf'])->name('laporan-kinerja.pdf');
   
});

Route::middleware(['auth', 'verified'])->prefix('data-informasi')->group(function () {
  Volt::route('/', 'data-informasi.index')->name('data-informasi');
  Volt::route('add', 'data-informasi.add')->name('data-informasi.add');
  Volt::route('edit/{id}', 'data-informasi.edit')->name('data-informasi.edit');
  Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('data-informasi.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('tugas')->group(function () {
  Volt::route('/', 'tugas.index')->name('tugas');
  Volt::route('add', 'tugas.add')->name('tugas.add');
  Volt::route('edit/{id}', 'tugas.edit')->name('tugas.edit');
//  Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('tugas.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('user')->group(function () {
  Route::get('/', [UserController::class, 'index'])->name('user');
  // Route::get('/add', [PegawaiController::class, 'add'])->name('nomor-surat.add');  
  // Route::post('/store', [PegawaiController::class, 'store'])->name('nomor-surat.store');     
  // Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('nomor-surat.edit');
  // Route::patch('/update', [PegawaiController::class, 'update'])->name('nomor-surat.update');
  // Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('nomor-surat.delete');
  Route::get('/setrole/{u}/{r}', [UserController::class, 'setRole'])->name('user.role');    
});

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');
});

Route::get('/migrate', function () {
  Artisan::call('cache:clear');
  Artisan::call('migrate');
});


require __DIR__ . '/auth.php';
