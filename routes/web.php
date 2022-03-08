<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'index'])->name('home');

// Route::get('/istorija', [PageController::class,'history'])->name('history');
Route::get('/pretraga', [SearchController::class,'search'])->name('search');
Route::get('/popularno', [PageController::class,'popular'])->name('popular');
Route::get('/blog', [BlogController::class,'blog'])->name('blog');
Route::get('/barovi', [PageController::class,'bars'])->name('bars');
Route::get('/politika-privatnosti', [PageController::class,'terms'])->name('terms');

Route::get('/blog/{slug}', [BlogController::class,'singlePost'])->name('singlePost');
Route::get('/blog/pretraga/{name}', [BlogController::class,'searchPost'])->where('name', '[a-zA-Z]+')->name('searchPost');
Route::get('/pretraga/{name}', [SearchController::class,'searchAlcohol'])->where('name', '[a-zA-Z]+')->name('searchAlcohol');
Route::get('/koktel/{id}-{slug}', [PageController::class,'singleCocktail'])->name('singleCocktail')->where('id', '[0-9]+');

Route::fallback(function () {
    return redirect('/pretraga');
});
