<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Categories;
use Auth;
use View;

class CategoriesController extends Controller
{
    public function showCategories(Request $request)
    {
        $user = Auth::user();

        $id = $request->input('id');

        if (!$user)
        {
            return redirect('');
        }
        else
        {
            if (!empty($id))
            {

                $showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
                $showPart = DB::table('products')->select()->where('category_id', $id)->paginate(8);
                return view('showPart', compact('showPart','showMatherials'));
            }
            else
            { 
            	$showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
            	$showProducts = DB::table('products')->select()->paginate(8);
            	return view('categories', compact('showMatherials', 'showProducts'));
            }
        }
    }
}