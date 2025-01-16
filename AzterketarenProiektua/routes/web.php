<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\EtxeaController@show');
Route::get('/alokairua', 'App\Http\Controllers\AlokairuaController@show');


Route::get('/etxea/{id}/edit', 'App\Http\Controllers\EtxeaController@edit')->name('etxea.edit');

Route::put('/etxea/{id}', 'App\Http\Controllers\EtxeaController@update')->name('etxea.update');

Route::get('/alokairua/{id}/edit', 'App\Http\Controllers\AlokairuaController@edit')->name('alokairua.edit');

Route::put('/alokairua/{id}', 'App\Http\Controllers\AlokairuaController@update')->name('alokairua.update');

Route::delete('/alokairua/{id}', 'App\Http\Controllers\AlokairuaController@destroy')->name('alokairua.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
