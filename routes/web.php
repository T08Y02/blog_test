<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController; 
//use App\resources\views;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [PostController::class,'index'])->name('index2');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/home', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', [PostController::class,'delete']);
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});


//Route::get('/categories/{category}', 'CategoryController@index');

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/categories/{category}', 'index');
});