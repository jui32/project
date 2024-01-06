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
        // dd($categories);


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

    public function itemsUnderCategory($category_id)
    {
        $itemsUnderCategory=Item::where('categroy_id',$category_id)->get();
        // dd($itemsUnderCategory);
        return view('frontend.front_pages.items-under-category',compact('itemsUnderCategory'));
    }


    public function about()
    {
        // dd('hi');
     return view('frontend.front_pages.about.about');

    }
}
