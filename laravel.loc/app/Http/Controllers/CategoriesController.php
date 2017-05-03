<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
use Illuminate\Support\Facades\DB;
use Auth;

class CategoriesController extends Controller
{
    public function showAllCategories()
    {
        $user = Auth::user();

        if (!$user)
        {
            return redirect('');
        }
        else
        {
        	$showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
        	$showProducts = DB::table('products')->select()->paginate(8);
        	return view('categories', compact('showMatherials', 'showProducts'));
        }
    }

    public function showHelms()
    {
    	$showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
    	$showHelms = DB::table('products')->select()->where('category_id', 4)->paginate(8);
    	return view('helms', compact('showHelms','showMatherials'));
    }

    public function showArmors()
    {
    	$showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
    	$showArmors = DB::table('products')->select()->where('category_id', 3)->paginate(8);
    	return view('armors', compact('showArmors','showMatherials'));
    }

    public function showSwords()
    {
    	$showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
    	$showSwords = DB::table('products')->select()->where('category_id', 1)->paginate(8);
    	return view('swords', compact('showSwords','showMatherials'));
    }

    public function showShields()
    {
    	$showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
    	$showShields = DB::table('products')->select()->where('category_id', 2)->paginate(8);
    	return view('shields', compact('showShields','showMatherials'));
    }

    public function showBoots()
    {
        $showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
        $showBoots = DB::table('products')->select()->where('category_id', 5)->paginate(8);
        return view('boots', compact('showBoots','showMatherials'));
    }

    public function showGloves()
    {
        $showMatherials = DB::table('matherials')->select('matherial_name')->paginate(8);
        $showGloves = DB::table('products')->select()->where('category_id', 6)->paginate(8);
        return view('gloves', compact('showGloves','showMatherials'));
    }

}
