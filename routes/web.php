<?php

use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropiedadController;
use Illuminate\Support\Facades\Route;

//INICIO
Route::get('/', [PropiedadController::class, 'index'])->name('index')->middleware('auth');

//FORMULARIO
Route::post('/propiedad.store',[PropiedadController::class,'store'])->name('propiedad.store');
Route::get('/propiedad.create',[PropiedadController::class,'create'])->name('propiedad.create');
Route::get('/propiedad.show/{propiedad}',[PropiedadController::class,'show'])->name('propiedad.show');
Route::get('/propiedad.edit/{propiedad}',[PropiedadController::class,'edit'])->name('propiedad.edit');
Route::post('/propiedad.update/{propiedad}',[PropiedadController::class,'update'])->name('propiedad.update');
Route::post('/propiedad.cambiar/{propiedad}',[PropiedadController::class,'cambiar'])->name('propiedad.cambiar');
Route::post('/propiedad.eliminada/{propiedad}',[PropiedadController::class,'eliminada'])->name('propiedad.eliminada');
Route::get('/propiedad.destroy/{propiedad}',[PropiedadController::class,'destroy'])->name('propiedad.destroy');
Route::get('/catalogo', [PropiedadController::class, 'catalogo'])->name('arrendador.catalogo');

//FAVORITOS
Route::get('/favoritos',[FavoritosController::class,'index'])->name('favoritos');
Route::post('/favoritos.store',[FavoritosController::class,'store'])->name('favoritos.store');
Route::get('/favoritos.destroy/{favoritos}',[FavoritosController::class,'destroy'])->name('favoritos.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
