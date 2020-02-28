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
//fontend
Route::get('/', function () {
    return view('content');
});
Route::get('/detailproduct', function(){
	return view('detailproduct');
});
Route::get('/categories', function(){
	return view('productcategories');
});
Route::get('/registeruser', 'RegistertestController@index', function(){
	return controller('registertest');
});
Route::post('/registeruser', 'RegistertestController@store', function(){
	return controller('registertest');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'LogintestController@index', function(){
	return controller('logintest');
});
Route::post('/login', [
	'uses' => 'LogintestController@check',
	'as' => 'login.check',
]);
Route::get('/logout', [
	'uses' => 'LogintestController@logout',
	'as' => 'logout',
]);

//user views

Route::get('/profile', 'UserController@index', function(){
	return controller('usercontroller');
});
Route::get('/update', 'UserController@update', function(){
	return controller('usercontroller');
});
Route::post('/update', [
	'uses' => 'UserController@store',
	'as' => 'update.store',
]);
Route::get('/user/avatar', 'UserController@updateavatar', function(){
	return controller('usercontroller');
});
//user upload product

Route::get('/upload', 'ProductController@create', function(){
	return controller('productcontroller');
});


Route::post('/upload', [
	'uses' => 'ProductController@store',
	'as' => 'upload.store',
]);

//library Product
Route::get('/upload/library', 'ProductController@createlibrary', function(){
	return controller('productcontroller');
});

//Blogs Page

Route::get('/blogs', function(){
	return view('/blogs/content');
});
Route::get('/blogs/content', function(){
	return view('/blogs/viewcontent');
});


//About Us Page

Route::get('/aboutus', function(){
	return view('/aboutus/index');
});

//Contact Us Page 

Route::get('/contact', function(){
	return view('/contact/index');
});