<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ComptadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChampionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/delete', [BookController::class, 'delete'])->name('books.delete');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/champions', [ChampionController::class, 'index'])->name('champions.index');
Route::get('/champions/create', [ChampionController::class, 'create'])->name('champions.create');
Route::post('/champions', [ChampionController::class, 'store'])->name('champions.store');
Route::get('/champions/{champion}', [ChampionController::class, 'show'])->name('champions.show');
Route::get('/champions/{champion}/edit', [ChampionController::class, 'edit'])->name('champions.edit');
Route::put('/champions/{champion}', [ChampionController::class, 'update'])->name('champions.update');
Route::get('/champions/{champion}/delete', [ChampionController::class, 'delete'])->name('champions.delete');
Route::delete('/champions/{champion}', [ChampionController::class, 'destroy'])->name('champions.destroy');

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () { Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard'); });
