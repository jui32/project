<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        // dd('hi');
     return view('frontend.front_pages.contact');

    }
}
