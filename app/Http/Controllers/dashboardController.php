<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function list()
    {
        $customer=Customer::where('customers')->count();

        return view('admin.includes.dashboard.home',compact('customers'));
        }
}
