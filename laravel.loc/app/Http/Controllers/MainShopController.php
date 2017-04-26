<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;

class MainShopController extends Controller
{
    public function showAllProducts()
    {
    	$showProducts = Products::all()->toArray();
    	return view('mainShopView');
    }

    public function showRandomProduct()
    {
    	$showRandom = Products::inRandomOrder()->first()->toArray();
    	return view('');
    }

    public function showCategories()
    {
    	$showCategories = Categories::select('category_name')->get()->toArray();
    	return view('categories');
    }

    public function addProduct()
    {
    	$addProduct = Products::insert("['product_name' => '$product_name'],
    								   ['category_id' => '$category_id'],
    								   ['image_name' => '$image_name'],
    								   ['price' => '$price']");
    }

}

$products = new MainShopController;