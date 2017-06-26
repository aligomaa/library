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
Route::get('mainPage', function () {
    return view('mainPage');
	
});


     //--------------users routes---------

Route::get('login', function () {
    return view('users.login')->name('login');
});

Route::get('register', function () {
    return view('users.register');
});

Route::get('/', function () {
    return redirect('login');
});

Route::get('book-new', function () {
    return view('books.book-new');
});


Route::post('/registeraction','registercontroller@store');
Route::post('/loginaction','registercontroller@login');
Route::post('/logoutaction','registercontroller@logout');
Route::resource('books','booksController');
Route::resource('users','usersController');
Route::resource('admins','adminsController');
Route::resource('authors','authorsController');
Route::resource('sections','sectionsController');







