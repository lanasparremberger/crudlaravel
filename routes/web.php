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


Route::middleware('auth')->group(function () {


    Route::get('/musicas/criar', [MusicController::class, 'criar'])->name('form');

    Route::post('/musicas/salvar', [MusicController::class, 'salvar'])->name('music.salvar');

    Route::get('/musicas/edita/{id}', [MusicController::class, 'edita'])->name('music.edita');
Route::post('/musicas/atualiza/{id}', [MusicController::class, 'atualiza'])->name('music.atualiza');

    Route::get('/musicas/apaga/{id}', [MusicController::class, 'apaga'])->name('music.apaga');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
