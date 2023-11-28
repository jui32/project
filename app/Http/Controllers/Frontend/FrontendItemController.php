<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendItemController extends Controller
{
    public function showlist(){
        return view('frontend.front_pages.Item.Item');
    }
}
