<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mata_Pelajaran;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('page-home.index');
});


Route::resource('/siswa', SiswaController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/mata_pelajaran', Mata_Pelajaran::class);


