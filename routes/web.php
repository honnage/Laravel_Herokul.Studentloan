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
Route::middleware(['auth','StatusIS'])->group(function(){
    Route::resource('/LoanType', 'LoanTypeController');

    Route::get('SendDocuments/dashboard','SendDocumentController@dashboard');
    Route::get('SendDocuments/edit/{id}','SendDocumentController@edit');
    Route::post('SendDocuments/update/{id}','SendDocumentController@update');

    Route::get('Accounts/dashboard','AccountController@dashboard');
    Route::get('Accounts/edit/{id}','AccountController@edit');
    Route::post('Accounts/update/{id}','AccountController@update');
});


Route::middleware(['auth'])->group(function(){
    Route::resource('/Profiles', 'ProfileController');

    Route::get('SendDocuments/create','SendDocumentController@create');
    Route::post('SendDocuments/store','SendDocumentController@store');

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
