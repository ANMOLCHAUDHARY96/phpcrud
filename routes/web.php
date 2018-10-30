
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

// Route::get('/', function () {
//     return view('home1');
// });
Route::get('/','creates@home');
Route::get('/create', function(){
    return view('create');
});
Route::post('/insert','creates@add');
Route::get('/update/{id}','creates@update');
Route::post('/edit/{id}','creates@edit');
Route::get('/delete/{id}','creates@delete');