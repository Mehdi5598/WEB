<?php

use App\Http\Controllers\PiloteController;
use Illuminate\Support\Facades\Route;

Route::get('/pilote', [PiloteController::class, 'main'])->name('pilote.main');

Route::get('/pilote/create', [PiloteController::class, 'create'])->name('pilote.create');
Route::post('/pilote', [PiloteController::class, 'store'])->name('pilote.store');

Route::get('/pilote/{pilote}/edit', [PiloteController::class, 'edit'])->name('pilote.edit');
Route::put('/pilote/{pilote}', [PiloteController::class, 'update'])->name('pilote.update');
Route::delete('/pilote/{pilote}', [PiloteController::class, 'destroy'])->name('pilote.destroy');
