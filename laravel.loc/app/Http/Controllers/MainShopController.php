<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
use Illuminate\Support\Facades\DB;
use Auth;
use View;

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

        $PopUpProduct = DB::table('products')->where('product_id', '=', $product_id)->first();

        return response()->json(['price' => $PopUpProduct->price, 'product_name' => $PopUpProduct->product_name,
            'image_name' => $PopUpProduct->image_name, 'description' => $PopUpProduct->description]);
    }

}