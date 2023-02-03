<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/santo/show/{id}', [MainController::class, 'santoShow']) -> name('santo.show');

Route::get('/santo/destroy/{id}', [MainController::class, 'santoDestroy']) -> name('santo.destroy');

Route::get('/santo/create', [MainController::class, 'santoCreate']) -> name('santo.create');

Route::post('/santo/store', [MainController::class, 'santoStore']) -> name('santo.store');