<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function list(){
        $order_data= Order::all();
        return view('admin.pages.order.list',compact('order_data'));

    }
   
}
