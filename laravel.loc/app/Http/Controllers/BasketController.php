<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Auth;

class BasketController extends Controller
{
   public function showOrder()
   {
   		$user = Auth::user();

    	if (!$user)
    	{
    		return redirect('');
    	}
    	else
    	{
	   		$showOrder = DB::table('users')
	   		->join('orders', 'users.id', '=', 'orders.user_id' )
	   		->join('products','products.product_id', '=', 'orders.product_id')->where('orders.user_id', '=', $user->id)
	   		->get()->toArray();
	    	return view('BasketView', compact('showOrder'));
    	}
   }

   public function addProduct(Request $request)
   {
   		$user = Auth::user();

   		$product_id = $request->input('product_id');

   		$addProduct = DB::table('orders')->insert(['user_id' => $user->id, 'product_id' => $product_id]);
   }

   public function removeProduct(Request $request)
   {
   		$user = Auth::user();

   		$product_idr = $request->input('product_idr');

   		$removeProduct = DB::table('orders')
   		->where('product_id', '=', $product_idr)
   		->delete();
   }
   
}
