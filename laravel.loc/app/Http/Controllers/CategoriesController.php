<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;

class CategoriesController extends Controller
{
    public function showAllCategories()
    {
    	//Под вопросом
    	$showCategories = Categories::select('category_name')->get()->toArray();
    	return view('categories');
    }

    public function showCategoryProducts()
    {

    }

    public function addNewCategory()
    {
    	$addProduct = Categories::insert("['category_name' => '$category']");
    }

    public function deleteCategory()
    {

    }

}
