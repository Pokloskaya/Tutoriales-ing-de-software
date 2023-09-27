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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

/* PARCIAL 1 START */

Route::controller('App\Http\Controllers\PetController')->group(function (): void {
    Route::get('/pet', 'index')->name('pet.index');
    Route::get('/pet/list', 'list')->name('pet.list');
    Route::get('/pet/statistics', 'statistics')->name('pet.statistics');
    Route::get('/pet/create', 'create')->name('pet.create');
    Route::post('/save', 'save')->name('pet.save'); 
});

/* PARCIAL 1 END*/


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/cart', [CartController::class, 'index'])->name("cart.index");
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name("cart.add");
Route::get('/cart/removeAll/', [CartController::class, 'removeAll'])->name("cart.removeAll");

Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");

Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");