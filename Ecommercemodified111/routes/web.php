<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\AddtocartController;

use App\Http\Controllers\Admins\ProductsController;

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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome');
});




// Route::get('category/{category}', [App\Http\Controllers\CategoriesController::class, 'category.show'])->name('women');
// Route::resource('/category', CategoriesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/detail/{id}/products',[ProductsController::class,'detail'])->name('products.showdetails'); 

Route::resource('/carts', AddtocartController::class);


Route::get('/search', [SearchController::class, 'search'])->name('web.search');
Route::get('/viewsearch/{id}', [ProductsController::class, 'viewsearch'])->name('web.search');
