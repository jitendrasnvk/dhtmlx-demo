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
    return view('gantt');
});

Route::get('scheular',function(){
    return view('scheduler');
}); 

Route::get('grid', function () {
    return view('grid');
});
Route::match(['get', 'post'], '/grid_data', "GridController@data");