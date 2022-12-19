<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;

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

Route::get('/', function () {
    return view('welcome');
});

// Routing Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@destroy');

//Routing Jurusan
Route::resource('jurusan', JurusanController::class);
Route::get('/jurusan/hapus/{id}', 'JurusanController@destroy');
