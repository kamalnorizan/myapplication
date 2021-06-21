<?php

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
    return view('welcome');
});

Route::get('/testroute', function(){
    echo 'This is my first route';
});

Route::get('/testroute/detail/abc', function(){
    echo 'This is my second route(Test route detail abc)';
});

Route::get('/testroute/detail/{id}', function($id){
    echo 'This is my second route( Test route detail id: '.$id.' )';
});

