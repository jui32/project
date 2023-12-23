<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function print()
    {
        $order_data= order::all();
        return view('admin.pages.order.print',compact('order_data'));
    }
    public function list(){
        $order_data= Order::all();
        return view('admin.pages.order.list',compact('order_data'));

    }
   
    public function delete($id)
    {
        $Order=Order::find($id);
        if($Order)
        {
            $Order->delete();
        }
        notify()->success('Order Deleted Successfully.');
        return redirect()->back();
    }
}
