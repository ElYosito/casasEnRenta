<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

//INICIO
Route::get('/',[PropiedadController::class,'index'])->name('index');

//FORMULARIO
Route::post('/propiedad.store',[PropiedadController::class,'store'])->name('propiedad.store');
Route::get('/propiedad.create',[PropiedadController::class,'create'])->name('propiedad.create');
Route::get('/catalogo', [PropiedadController::class, 'catalogo'])->name('arrendador.catalogo');

//Route::post('/prueba.store',[PruebaController::class,'store'])->name('prueba.store');
//Route::get('/prueba.create',[PruebaController::class,'create'])->name('prueba.create');
//Route::get('/catalogo',[PruebaController::class, 'catalogo']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
