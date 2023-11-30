<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function buyNow($itemId)
    {
       //apply/booking/reservation/order/auction_apply

       Order::create([
            'user_id'=>auth()->user()->id,
            'item_id'=>$itemId,
       ]);

       notify()->success('Order placed');
       return redirect()->back();

    }

    public function cancelOrder($order_id)
    {

        $order=Order::find($order_id);
        if($order)
        {
            $order->update([
                'status'=>'cancelled'
            ]);
        }

        notify()->success('Order Cancelled');
       return redirect()->back();
        
    }
}
