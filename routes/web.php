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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/settings', 'UserController@settings')->name('settings');


Route::post('settings', 'UserController@updateProfile')->name('update.profile');
Route::post('/changepassword', 'UserController@changePassword')->name('changePassword');


Route::get('/lends', 'LendController@index')->name('lends');
Route::get('/loans', 'LoanController@index')->name('loans');
Route::get('/payments', 'PaymentController@index')->name('payments');


Route::get('/messages', function(){
    $status = App\Status::all();
    return view('modules.Message.index', ['statuses' => $status]);
})->name('messages');


