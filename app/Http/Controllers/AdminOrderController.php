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

    public function search(Request $request)
    {
        // dd(request()->all())

        if ($request->search) {
            $items = order::where('user_id', 'LIKE', '%' . $request->search . '%')->get();
            //select * from Plants where name like % rose %;
        } else {
            $items = order::all();
        }
        return view("admin.pages.order.Search", compact('items'));
    }
}
