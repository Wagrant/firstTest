<?php
Route::get('/', function () {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::any('/main', 'MainShopController@showAllProducts');
Route::any('/categories', 'CategoriesController@showAllCategories');
Route::any('/basket', 'BasketController@showOrder');