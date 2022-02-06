<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

//Frontend Routes
Route::get('/', [FrontendController::class, 'index']);
Route::get('/blog/{id}', [FrontendController::class, 'singleBlog'])->name('blog_view');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => '/blog', 'middleware' => 'auth'], function(){

    Route::get('/', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
    Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog_create');
    Route::post('/create', [App\Http\Controllers\BlogController::class, 'store'])->name('blog_store');
    Route::get('/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog_edit');
    Route::post('/edit/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog_update');
    Route::get('/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog_delete');

    Route::group(['prefix' => '/category'], function(){
        Route::get('/', [App\Http\Controllers\BlogCategoryController::class, 'blog'])->name('blog_category');
        Route::get('/create', [App\Http\Controllers\BlogCategoryController::class, 'create'])->name('blog_category_create');
        Route::post('/create', [App\Http\Controllers\BlogCategoryController::class, 'store'])->name('blog_category_store');
        Route::get('/edit/{id}', [App\Http\Controllers\BlogCategoryController::class, 'edit'])->name('blog_category_edit');
        Route::post('/edit/{id}', [App\Http\Controllers\BlogCategoryController::class, 'update'])->name('blog_category_update');
        Route::get('/delete/{id}', [App\Http\Controllers\BlogCategoryController::class, 'delete'])->name('blog_category_delete');
    });

});


