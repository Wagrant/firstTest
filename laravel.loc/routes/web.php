<?php
Route::get('/', function () {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::any('/bank', function()
	{return view('bankView');});
Route::any('/aboutUs', function()
	{return view('aboutUsView');});
Route::any('/main', 'MainShopController@showAllProducts');
Route::any('/mainPopUp', 'MainShopController@showPopUpProduct');
Route::any('/categories', 'CategoriesController@showCategories');
Route::any('/basket', 'BasketController@showOrder');
Route::any('/addProduct', 'BasketController@addProduct');
Route::post('/removeProduct', 'BasketController@removeProduct');