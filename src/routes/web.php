<?php

Route::group(['namespace' => 'Mamun\Contact\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send')->name('contact');

});
