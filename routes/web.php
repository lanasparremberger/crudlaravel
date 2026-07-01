<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/musicas', [MusicController::class, 'index'])->name('listagem');
Route::get('/criar', [MusicController::class, 'criar'])->name('form');
Route::get('/edita/{id}', [MusicController::class, 'edita'])->name('editaMusic');
Route::post('/atualiza/{id}', [MusicController::class, 'atualiza'])->name('atualizaMusic');

Route::post('/musicas/salvar', [MusicController::class, 'salvar'])->name('music.salvar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
