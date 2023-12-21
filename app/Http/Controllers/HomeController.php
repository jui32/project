<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Item;
use App\Models\order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        
        return view('admin.pages.master');
    }
    public function dashboardhome(){
        $customerCount=Customer::all()->count();
        $orderCount=order::all()->count();
        $categoryCount=Category::all()->count();
        $itemCount=Category::all()->count();

        return view('admin.includes.dashboardhome',compact('customerCount','orderCount','categoryCount','itemCount'));
    }
}
