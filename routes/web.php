<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('comics', ComicController::class);

/*
// imposto la rotta INDEX() per la vista della lista dei fumetti
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// imposto la rotta SHOW() per la vista dei dettagli del fumetto
Route::get('/comics{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::get('/create', [ComicController::class, 'create'])->name('comics.create');
*/