<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
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
        // dd('hi');
        $deliveryman = Delivery::all();    
        $order_data= Order::with('deliver')->get();
        // dd($order_data);
        return view('admin.pages.order.list',compact('order_data','deliveryman'));

    }



    public function view( $id){

        $deliveryman = Delivery::all();   
        // dd($deliveryman) ;
        $order = Order::with('details')->find($id);
        
        return view('admin.pages.order.view',compact('order','deliveryman'));
    }


    
    public function status(Request $request, $id){
        // dd('hi');
        $order = Order::find($id);
        // dd($order);
        $order->update([
            'status'=>($request->deliveryMan),

        ]);
        return view('admin.pages.order.view',compact('order'));
    }
   

    public function deliveryman(Request $request, $id){
        // $request->all();
        //  dd($request->all());
        $order = Order::find($id);
      
        $order->update([
            'deliveryman'=>$request->deliveryMan,
            'status'=>$request->status,


        ]);
       return redirect()->back();
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
