<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/categories', ['uses' => 'AdminCategoriesController@index']);
Route::get('admin/products', ['uses' => 'AdminProductsController@index']);