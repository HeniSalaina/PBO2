<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/Keranjang', 
\App\Http\Controllers\KeranjangController::class);

Route::resource('/Keranjang', 
\App\Http\Controllers\keranjangController::class);