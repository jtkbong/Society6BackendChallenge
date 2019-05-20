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

Route::get('/vendorcontroller/path', [
    'uses' => 'VendorController@showPath'
]);

Route::get('/createCreative', function() {
    return view('createCreative');
});

Route::post('/creative/create', [
    'uses' => 'CreativeController@postCreate'
]);

Route::put('/creative/{id}', 'CreativeController@update');

Route::get('/delete/creative/{id}', 'CreativeController@delete');

Route::get('/creative/{id}', 'CreativeController@get');

Route::get('/creatives', 'CreativeController@list');

Route::get('/createVendor', function() {
    return view('createVendor');
});

Route::post('/vendor/create', [
    'uses' => 'VendorController@postCreate'
]);

Route::get('/vendors', 'VendorController@list');

Route::get('/createProductType', function() {
    return view('createProductType');
});

Route::post('/productType/create', [
    'uses' => 'ProductTypeController@postCreate'
]);

Route::get('/productTypes', 'ProductTypeController@list');

Route::get('/createProduct', function() {
    return view('createProduct');
});

Route::post('/product/create', [
    'uses' => 'ProductController@postCreate'
]);

Route::get('/products', 'ProductController@list');

Route::get('/createCustomer', function() {
    return view('createCustomer');
});

Route::post('/customer/create', [
    'uses' => 'CustomerController@postCreate'
]);

Route::get('/delete/customer/{id}', 'CustomerController@delete');

Route::get('/customers', 'CustomerController@list');

Route::get('/createOrder', function() {
    return view('createOrder');
});

Route::post('/order/create', [
    'uses' => 'OrderController@postCreate'
]);

Route::get('/test', function() {
    return view('createTest');
});

Route::post('/order/test', [
    'uses' => 'OrderController@test'
]);

Route::get('/orders/{vendorId}', 'OrderController@list');