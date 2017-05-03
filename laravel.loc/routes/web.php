<?php
Route::get('/', function () {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::any('/main', 'MainShopController@showAllProducts');
Route::any('/mainPopUp', 'MainShopController@showPopUpProduct');
Route::any('/categories', 'CategoriesController@showAllCategories');
Route::any('/basket', 'BasketController@showOrder');
Route::any('/helms', 'CategoriesController@showHelms');
Route::any('/armors', 'CategoriesController@showArmors');
Route::any('/swords', 'CategoriesController@showSwords');
Route::any('/shields', 'CategoriesController@showShields');
Route::any('/boots', 'CategoriesController@showBoots');
Route::any('/gloves', 'CategoriesController@showGloves');
Route::any('/basket', 'BasketController@showOrder');
Route::post('/addProduct', 'BasketController@addProduct');
Route::post('/removeProduct', 'BasketController@removeProduct');