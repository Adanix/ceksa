<?php

use App\Http\Controllers\Auth\SesiController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\Admin\{
   AdminController,
   AdminDataUserController,
   AdminHasilDiagnosaController,
   AdminRuleController
};
use App\Http\Controllers\Maintener\{
   MaintenerController,
   MaintenerDiagnosaController,
   MaintenerGejalaController,
   MaintenerPenggunaController,
   MaintenerPenyakitController,
   MaintenerRiwayatController,
   MaintenerRuleController
};
use App\Http\Controllers\Responden\{
   RespondenController,
   RespondenDiagnosaController
};
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']); // Landing Page
Route::get('/penyakit-dan-gejala', [PageController::class, 'penyakit_gejala']); // * Halaman penyakit dan gejala
Route::get('/diagnosa', [PageController::class, 'diagnosa']); //* Diagnosa No Login
Route::get('/artikel', [PageController::class, 'stunting']); //* Artikel Stunting
Route::get('/artikel/{post:slug}', [PageController::class, 'artikel_post']); //* Artikel Stunting Post
Route::get('/categories', [PageController::class, 'categories']);
Route::get('/categories/{category:slug}', [PageController::class, 'category']);

Route::post('/proses', [PageController::class, 'diag']);

Route::get('/upload', [PageController::class, 'upload']);
Route::post('/upload/proses', [PageController::class, 'proses_upload']);


//! Ini Salah!!!
Route::get('/home', function () {
   return redirect('/');
});


Route::middleware(['guest'])->group(
   function () {
      Route::get('/login', [SesiController::class, 'login'])->name('login'); // Login
      Route::post('/ceklogin', [SesiController::class, 'ceklogin']); // Cek Login
      Route::get('/register', [SesiController::class, 'register']); // Register
      Route::post('/cekregistrasi', [SesiController::class, 'cekregistrasi']); // Cek Register
   }
);


//TODO Route Maintener
Route::middleware(['auth', 'userakses:maintener'])->group(
   function () {
      Route::resource('/maintener/maintener-diagnosa', MaintenerDiagnosaController::class);
      Route::resource('/maintener/pengguna', MaintenerPenggunaController::class);
      Route::resource('/maintener/data-diagnosa', MaintenerRiwayatController::class);
      Route::resource('/maintener/data-gejala', MaintenerGejalaController::class);
      Route::resource('/maintener/data-penyakit', MaintenerPenyakitController::class);
      Route::resource('/maintener/data-rule', MaintenerRuleController::class);
      Route::get('/maintener/dashboard', [MaintenerController::class, 'index']);
      Route::get('/maintener/data-jawaban', [MaintenerController::class, 'jawaban']);
      Route::get('/maintener/riwayat-diagno', [MaintenerController::class, 'riwayat']);
      Route::get('/maintener/profil', [MaintenerController::class, 'profil']);
      Route::post('/maintener/perubahan', [MaintenerController::class, 'perubahan']);
      Route::post('/maintener/pass', [MaintenerController::class, 'gantiPass']);
      Route::post('/maintener/logout', [MaintenerController::class, 'logout']);
   }
);

//TODO Admin Controller
Route::middleware(['auth', 'userakses:admin'])->group(
   function () {
      Route::resource('/admin/datauser', AdminDataUserController::class);
      Route::resource('/admin/rule', AdminRuleController::class);
      Route::resource('admin/hasil-diagnosa', AdminHasilDiagnosaController::class);
      Route::get('/admin/dashboard', [AdminController::class, 'index']);
      Route::get('/admin/profil', [AdminController::class, 'profil']);
      Route::post('/admin/perubahan', [AdminController::class, 'perubahan']); //* POST
      Route::get('/admin/gejala', [AdminController::class, 'gejala']);
      Route::get('/admin/penyakit', [AdminController::class, 'penyakit']);
      Route::get('/admin/nilai-jawaban', [AdminController::class, 'jawaban_ori']);
      Route::post('/admin/logout', [AdminController::class, 'logout']);
   }
);

//TODO Route Responden
Route::middleware(['auth', 'userakses:responden'])->group(
   function () {
      Route::resource('/responden/diagnosa', RespondenDiagnosaController::class);
      Route::get('/responden/dashboard', [RespondenController::class, 'index']);
      Route::get('/responden/riwayat', [RespondenController::class, 'riwayatDiagnosa']);
      Route::get('/responden/profil', [RespondenController::class, 'profil']);
      Route::post('/responden/perubahan', [RespondenController::class, 'perubahan']);
      Route::post('/responden/logout', [RespondenController::class, 'logout']);
   }
);
