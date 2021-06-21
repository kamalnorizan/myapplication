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

Route::get('/routelearning', function () {
    return view('routelearning');
});


Route::get('/learnrouteurl', function(){
    echo '<h1>This is my first route</h1>';
})->name('learnroute');

Route::get('/testroute/detail/abc', function(){
    echo 'This is my second route(Test route detail abc)';
})->name('testroute');

// Route::get('/testroute/detail/{id}', function($id){
//     echo 'This is my second route( Test route detail id: '.$id.' )';
// })->whereNumber('id');


// Route::get('/testroute/detail/{id}', function($id){
//     echo 'This is my second route( Test route detailalpha id: '.$id.' )';
// })->whereAlpha('id');

Route::get('/testroute/detail/{id}/{name}', function($id, $name){
    echo '<h1>This is my second route( '.$name.' detailalpha numeric id: '.$id.' )</h1>';
})->whereNumber('id')->whereAlpha('name');

Route::get('/testroute/detail7/{id}/{name}', function($id, $name){
    echo '<h1>This is my second route( '.$name.' detailalpha numeric id: '.$id.' )</h1>';
})->where('id','[0-9]+')->where('name','[A-Za-z]+');

