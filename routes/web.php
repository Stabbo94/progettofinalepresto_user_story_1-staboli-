<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Creazione articolo
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

// Indice articoli
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Rotta parametrica per pagina di dettaglio
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Rotta parametrica per link categorie
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

// Area revisori
Route::get('revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

Route::get('revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Ricerca articoli
Route::get('/search/article', [ArticleController::class, 'searchArticles'])->name('article.search');

// Cambio lingua
Route::post('lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');