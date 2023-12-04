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
        return view('frontend.front_includes.home', compact('items','categories'));
    }
    public function search (request $request)
    {
        // dd(request()->all());
        if($request->search)
        {
            $items=Item::where('name','LIKE','%'.$request->search.'%')->get();
            //select * from items where name like % Burger %;
        }
        else{
            $items=Item::all();
        }
        return view("frontend.front_pages.search",compact('items'));
    }
}
