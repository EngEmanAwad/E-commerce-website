<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fproductsController;
use App\Http\Controllers\Admins\PostController;
use App\Http\Controllers\Admins\RolesController;
use App\Http\Controllers\Admins\usersController;
use App\Http\Controllers\Admins\ProductsController;
use App\Http\Controllers\Admins\dashboardController;
use App\Http\Controllers\Admins\CategoriesController;

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
Route::resource('/products', ProductsController::class);
Route::resource('/category', CategoriesController::class);



Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function () {
    Route::get('/',[dashboardController::class,'index']); 

    Route::resource('/users',usersController::class);
    Route::resource('/roles',RolesController::class);
    Route::resource('/posts',PostController::class);
    
    // Route::resource('/products',ProductsController::class);
    // Route::resource('/category',CategoriesController::class);

    Route::get('/users/{id}/posts',[usersController::class,'showposts'])->name('users.showposts');
   

});



