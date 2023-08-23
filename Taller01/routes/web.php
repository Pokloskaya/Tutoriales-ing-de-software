<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccesoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/accesories', [AccesoriesController::class, 'getAccesories'])->name('accesories.view');
Route::get('/accesories/create', [AccesoriesController::class, 'create'])->name('accesories.create');
Route::post('/accesories/save', [AccesoriesController::class, 'save'])->name('accesories.save');
