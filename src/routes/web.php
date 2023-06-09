<?php

use Alooy\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
Route::group(['namespace' => 'Alooy\Contact\Http\Controllers'], function() {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send')->name('contact');
});