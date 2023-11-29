<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class FrontendItemController extends Controller
{
    public function showlist(){

        $items = Item::all();
        $categories = Category::all();

        return view('frontend.front_pages.Item.Item', compact('items','categories'));
    }
}
