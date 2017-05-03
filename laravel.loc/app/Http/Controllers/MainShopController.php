<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
use Illuminate\Support\Facades\DB;
use Auth;

class MainShopController extends Controller
{
    public function showAllProducts()
    {
    	$user = Auth::user();
    	if (!$user)
    	{
    		return redirect('');
    	}
    	else
    	{
	    	$showFullArmor = DB::table('fulls')->inRandomOrder()->limit(1)->get()->toArray();

	    	$showProducts = Products::inRandomOrder()->limit(5)->get()->toArray();
	    	return view('mainShopView', compact('showProducts', 'showFullArmor'));
    	}
    }

    public function showPopUpProduct(Request $request)
    {
        $product_id = $request->input('product_id');

        $showFullArmor = DB::table('fulls')->inRandomOrder()->limit(1)->get()->toArray();

        $showProducts = Products::inRandomOrder()->limit(5)->get()->toArray();

        $showPopUpProduct = DB::table('products')->get()->toArray();
        return view('mainShopView', compact('showPopUpProduct','showProducts', 'showFullArmor'));
    }

}