<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/pilot', [PiloteController::class,'index'])->name('pilote.index');
Route::get('/pilot/form', [PiloteController::class,'form'])->name('pilote.form');
Route::post('/pilot', [PiloteController::class, 'create'])->name('pilote.create');
Route::get('/pilot/home', [PiloteController::class, 'home'])->name('pilote.home');
Route::get('/pilot/{pilote}/edit', [PiloteController::class, 'edit'])->name('pilote.edit');
Route::put('/pilot/{pilote}/update', [PiloteController::class, 'update'])->name('pilote.update');
Route::delete('/pilot/{pilote}/del', [PiloteController::class, 'destroy'])->name('pilote.del');
Route::get('/pilot/search', [PiloteController::class, 'search'])->name('pilote.search');



Route::get('/Etudiant/search', [EtudiantController::class, 'search'])->name('Etudiant.search');


Route::resource('Etudiant', EtudiantController::class);





