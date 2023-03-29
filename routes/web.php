<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\HojaDeCargoController;
use App\Http\Controllers\InformeController;



Route::get('hojadecargo', [HojaDeCargoController::class, 'index'])->name('hojadecargo.index');

Route::get('insumos', [InsumoController::class, 'index'])->name('insumos.index');

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('informes', [InformeController::class, 'index'])->name('informes.index');
