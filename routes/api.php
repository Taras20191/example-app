<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products', 'MarketController@products');
Route::get('product/{product_id}', 'MarketController@getProductById');
Route::delete('product/{product_id}', 'MarketController@deleteProduct');
Route::put('product/{product_id}', 'MarketController@UpdateProduct');
Route::get('orders', 'MarketController@orders');
Route::get('order/{order_id}', 'MarketController@getOrderById');
Route::get('categories', 'MarketController@categories');
