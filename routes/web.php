<?php
use App\Http\Controllers\EventController;
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
Route::resource('/','EventController');
Route::get('addeventurl','EventController@display')->name('EventController.store');
Route::post('addeventurl/store','EventController@store')->name('addevent.store');
Route::get('editeventurl','EventController@show');
Route::get('deleteeventurl','EventController@show');
Route::post('editeventurl/update/{id}','EventController@update')->name('editform_update');
Route::get('deleteeventurl/{id}','EventController@destroy');