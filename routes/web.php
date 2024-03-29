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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , 'HomepageController@index');
Route::get('/about-us' , 'HomepageController@aboutUs');
Route::get('/our-products' , 'HomepageController@products');
Route::get('/contact-us' , 'HomepageController@contactUs');
Route::post('/contact-us' , 'HomepageController@contactUsConfirm');
Route::get('/faq' , 'HomepageController@faq');
