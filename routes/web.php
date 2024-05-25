<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\datacreateController;
use App\Http\Controllers\stokController;

Route::GET('/', function () {
    return view('welcome');
})->name('welcome');

//route data
Route::GET('/data', [dataController::class, 'index'])->name('data');
Route::GET('/data-create', function () {
    return view('data/data-create');
})->name('data-create');
Route::POST('/data-store', [dataController::class, 'store'])->name('data.store');
Route::GET('/data/edit/{id}', [dataController::class, 'edit'])->name('data-edit');
Route::PUT('/data/update/{id}', [dataController::class, 'update'])->name('data.update');
Route::GET('/data-destroy/{id}', [dataController::class, 'destroy'])->name('data-destroy');
Route::get('/data-pdf', [dataController::class, 'exportpdf']);

//route stok
Route::GET('/stok', [stokController::class, 'index'])->name('stok');
Route::GET('/stok-create', function () {
    return view('stok/stok-create');
})->name('stok-create');
Route::POST('/stok-store', [stokController::class, 'store'])->name('stok.store');
Route::GET('/stok/edit/{id}', [stokController::class, 'edit'])->name('stok-edit');
Route::PUT('/stok/update/{id}', [stokController::class, 'update'])->name('stok.update');
Route::GET('/stok-destroy/{id}', [stokController::class, 'destroy'])->name('stok-destroy');
