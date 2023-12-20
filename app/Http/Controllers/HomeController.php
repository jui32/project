<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        
        return view('admin.pages.master');
    }
    public function dashboardhome(){
        return view('admin.includes.dashboardhome');
    }
}
