<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/Etudiant/search', [EtudiantController::class, 'search'])->name('Etudiant.search');


Route::resource('Etudiant', EtudiantController::class);



