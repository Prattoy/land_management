<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('available-assets.index');
});

// Available Assets Routes
Route::get('/available-assets', 'AvailableAssetController@index')->name('available-assets.index');
Route::post('/available-assets', 'AvailableAssetController@store')->name('available-assets.store');
Route::put('/available-assets/{id}', 'AvailableAssetController@update')->name('available-assets.update');
Route::delete('/available-assets/{id}', 'AvailableAssetController@destroy')->name('available-assets.destroy');

// Occupied Assets Routes
Route::get('/occupied-assets', 'OccupiedAssetController@index')->name('occupied-assets.index');
Route::post('/occupied-assets', 'OccupiedAssetController@store')->name('occupied-assets.store');
Route::put('/occupied-assets/{id}', 'OccupiedAssetController@update')->name('occupied-assets.update');
Route::delete('/occupied-assets/{id}', 'OccupiedAssetController@destroy')->name('occupied-assets.destroy');
