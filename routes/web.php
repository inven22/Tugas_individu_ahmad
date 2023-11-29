<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

route::get('/home',[HomeController::Class,'index']);
Route::get('list_barang', [App\Http\Controllers\barang::class,'index'])->name('barang.index');
Route::get('/add_barang',[App\Http\Controllers\barang::class,'Add'])->name('barang.add');
Route::post('/insert', [App\Http\Controllers\barang::class,'insert']);
Route::get('/edit_barang/{KodeBarang}', [App\Http\Controllers\barang::class,'Edit'])->name('barang.edit');
Route::post('/update/{KodeBarang}', [App\Http\Controllers\barang::class,'Update']);
Route::get('/delete/{KodeBarang}', [App\Http\Controllers\barang::class,'Delete']);

//Kasir
Route::get('list_kasir', [App\Http\Controllers\KasirController::class,'index'])->name('kasir.index');

//Tenan
Route::get('list_tenan', [App\Http\Controllers\tenan::class,'index'])->name('Tenan.index');