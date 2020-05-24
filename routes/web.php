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

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('loginAdmin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('adminRegister');

Route::group(['middleware' => 'auth:admin'], function () {
    Auth::routes();
    //Route::view('/admin', 'admin');
    Route::get('/admin/home' , 'Admin\HomeController@index');

    // Contact Admin Routes 
   Route::get('admin/contacts','Admin\ContactController@index')->name('ContactUs');
   Route::get('admin/contacts/getdata', 'Admin\ContactController@getdata')->name('ContactUs.getdata');
   Route::post('admin/contacts/postdata', 'Admin\ContactController@postdata')->name('ContactUs.postdata');
   Route::get('admin/contacts/fetchdata', 'Admin\ContactController@fetchdata')->name('ContactUs.fetchdata');
   Route::get('admin/contacts/removedata', 'Admin\ContactController@removedata')->name('ContactUs.removedata');

    });

Route::get('/contact-us' , 'ContactController@index');
Route::post('/send','ContactController@save')->name('sendMessage'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
