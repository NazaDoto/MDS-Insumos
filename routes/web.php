<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\HojaDeCargoController;
use App\Http\Controllers\InsumosInformeController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\IngresosController;
use RealRashid\SweetAlert\Facades\Alert;



Route::get('hojadecargo', [HojaDeCargoController::class, 'index'])->name('hojadecargo.index');

Route::get('insumos', [InsumoController::class, 'index'])->name('insumos.index');
Route::post('/insumos', [InsumoController::class, 'store'])->name('insumos.store');
Route::delete('/insumos/{id}', [InsumoController::class, 'destroy'])->name('insumos.destroy');



Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('informes', [InformesController::class, 'index'])->name('informes.index');

Route::get('/insumos/informes', [InsumosInformeController::class, 'index'])->name('insumosInformes.index');
Route::get('/insumos/informes/pdf/{id}',[InsumosInformeController::class,'createPDF'])->name('insumosInformes.createPDF');

Route::get('ingresos', [IngresosController::class, 'index'])->name('ingresos.index');
Route::patch('/ingresos', [IngresosController::class, 'update'])->name('ingresos.update');
