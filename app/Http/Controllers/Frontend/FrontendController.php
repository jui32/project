<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class FrontendController extends Controller
{
    public function home(){

        $items = Item::all();
        $categories = Category::all();


        // dd($items->toarray());        
        return view('frontend.front_pages.master', compact('items','categories'));
    }
}
