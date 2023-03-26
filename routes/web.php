<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'app');
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/trash', [KaryawanController::class, 'trash']);
Route::get('/karyawan/kembalikan/{id}', [KaryawanController::class, 'kembalikan']);
Route::get('/karyawan/kembalikan_semua', [KaryawanController::class, 'kembalikan_semua']);
Route::get('/karyawan/hapus_permanen/{id}', [KaryawanController::class, 'hapus_permanen']);
Route::get('/karyawan/hapus_semua', [KaryawanController::class, 'hapus_semua']);


Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/tambah', [ProductController::class, 'tambah']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::put('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/hapus/{id}', [ProductController::class, 'hapus']);
Route::get('/product/cari', [ProductController::class, 'cari']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
