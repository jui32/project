<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function home(){

        $items = Item::all();
        // dd($items->toarray());        
        return view('frontend.front_pages.master', compact('items'));
    }
}
