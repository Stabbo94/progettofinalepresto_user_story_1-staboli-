<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Creazione articolo
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

// Indice articoli
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Rotta parametrica per pagina di dettaglio
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Rotta parametrica per link categorie
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');