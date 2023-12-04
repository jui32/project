<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class FrontendItemController extends Controller
{
    public function showlist(){

        $items = Item::with('cat')->get();
        // $categories = Category::all();

        return view('frontend.front_pages.Item.Item', compact('items'));
    }
    public function  singleItemtView($itemId)
    {
        

        $singleItem=Item::find($itemId);
        // dd($singleProduct->name);
        return view('frontend.front_pages.item-view',compact('singleItem'));

    }
}
