<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class BasketController extends Controller
{
   public function showOrder()
   {
   		$showOrder = Orders::all()->toArray();
    	return view('BasketView');
   }

   public function deleteProduct()
   {

   }
}
