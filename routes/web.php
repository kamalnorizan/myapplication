<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/posts',[PostController::class,'index'])->name('posts.index');
// Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
// Route::post('/posts',[PostController::class,'store'])->name('posts.store');
// Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
// Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
// Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
// Route::delete('/posts/{post}',[PostController::class,'delete'])->name('posts.destroy');
Route::get('/posts/displayName', [PostController::class,'displayName'])->name('posts.displayName');

Route::get('/posts/userposts', [PostController::class,'userposts'])->name('posts.userposts');
Route::get('/posts/create2',[PostController::class,'create2'])->name('posts.create2');
// Route::get('/posts',[PostController::class,'index'])->name('posts.index');
// Route::get('/posts/{id}/edit',[PostController::class,'edit'])->whereNumber('id')->name('posts.edit');
Route::resource('/posts', PostController::class)->only('index','edit');
// Route::resource('/posts', PostController::class)->except('create','store','show','update','destroy');




// Route::get('/posts/{post}/edit',[PostController::class,'edit'])->whereNumber('id')->name('posts.edit');
// // Route::get('/posts',[PostController::class,'index'])->name('posts.index');
// // Route::delete('/posts/{post}',[PostController::class,'delete'])->name('posts.destroy');
// Resource (
//     Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
//     Route::post('/posts',[PostController::class,'store'])->name('posts.store');
//     Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
//     Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
// )->except('index','edit','destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
