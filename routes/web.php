<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Halocontroller;

Route::get('/', function () {
    return view("welcome");
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}/update', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}/delete', [BukuController::class, 'delete'])->name('buku.delete');




// Route::get('/hello', [Halocontroller::class, 'index']);

// Route::get('/test', [Halocontroller::class, 'hello']);
