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

Route::any('/test', 'Home\IndexController@index');
Route::any('/run', 'Home\IndexController@run');
Route::any('/home', 'Home\IndexController@home');
Route::any('/sync', 'Home\IndexController@sync');
Route::any('/json', 'Home\IndexController@json');
Route::any('/info', 'Home\IndexController@test');

Route::any('/user', 'Home\IndexController@user');
Route::any('/stu', 'Student\IndexController@index');

Route::any('/aes', 'Home\IndexController@aes');
Route::any('/web', 'Web\IndexController@web');
Route::any('/e', 'Api\IndexController@export');
