<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Categories;
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

	    	$layout = DB::table('products')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->select('categories.category_name', 'categories.category_id')
            ->groupBy('categories.category_name', 'categories.category_id')
            ->get()->toArray();

            $showProducts = DB::table('products')
            ->inRandomOrder()->limit(5)->get()->toArray();
            return view('mainShopView', compact('showProducts','layout', 'showFullArmor'));
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