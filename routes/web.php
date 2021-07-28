<?php

use Illuminate\Support\Facades\Route;


Route::get('/Market', function () {

    return view('Market');

});

Route::get('/Market/all', 'MarketController@allData')->name('market-data');

