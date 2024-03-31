<?php

use App\Http\Controllers\PiloteController;
use App\Http\Controllers\InternshipsController;
use Illuminate\Support\Facades\Route;

Route::get('/pilote', [PiloteController::class, 'main'])->name('pilote.main');

Route::get('/pilote/create', [PiloteController::class, 'create'])->name('pilote.create');
Route::post('/pilote', [PiloteController::class, 'store'])->name('pilote.store');

Route::get('/pilote/{pilote}/edit', [PiloteController::class, 'edit'])->name('pilote.edit');
Route::put('/pilote/{pilote}', [PiloteController::class, 'update'])->name('pilote.update');
Route::delete('/pilote/{pilote}', [PiloteController::class, 'destroy'])->name('pilote.destroy');

/*internships pages*/
Route::get('/internships', [InternshipsController::class, 'index'])->name('internships.index');

Route::get('/internships/create', [InternshipsController::class, 'create'])->name('internships.create');
Route::post('/internships', [InternshipsController::class, 'store'])->name('internships.store');

Route::get('/internships/{internship}/edit', [InternshipsController::class, 'edit'])->name('internships.edit');
Route::put('/internships/{internship}', [InternshipsController::class, 'update'])->name('internships.update');
Route::delete('/internships/{internship}', [InternshipsController::class, 'destroy'])->name('internships.destroy');
