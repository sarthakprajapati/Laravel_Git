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

Route::get('/', function () {
    return view('welcome');
});

//Route Parameters -> Required Parameters
Route::get('/reqpar/{id}',function($id){
	echo "<h1>Required Parameters</h1>";
	echo '<h3>ID:'.$id.'</h3>';
});

//Route Parameters -> Optional Parameters
Route::get('optpar/{name?}',function($name = 'sarthak_ishu11'){
	echo '<h1>Optional Parameter</h1>';
	echo '<h1>'.$name.'</h1>';
});

//Named Rote -- !Doubt
Route::get('user/profile', 'UserController@showProfile')->name('profile');