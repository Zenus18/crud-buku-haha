<?php

use App\Http\Controllers\BukuController;
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

//get
Route::get('/buku/index', [BukuController::class, "index"])->name('buku');

//create buku
Route::get('/buku/create', [BukuController::class, "create"])->name('buku.create');
Route::post('/buku', [BukuController::class, "store"])->name('buku.store');

//delete  buku
Route::get('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

// edit buku
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');