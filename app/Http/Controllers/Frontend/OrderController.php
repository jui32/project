<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderPlace(Request $request)
    {
        // dd('hi');
       
        //validation here

        // dd($request->all());

        $cart=session()->get('vcart');
        // dd($cart);
        //create order
        $order=Order::create([
            'user_id'=>auth('customer')->user()->id,
            'status'=>'pending',
            'total_price'=>array_sum(array_column($cart,'subtotal')),
            'address'=>$request->address,
            'receiver_mobile'=>$request->phone_number,
            'receiver_name'=>$request->name,
            'receiver_email'=>$request->email_address,
            'order_note'=>$request->order_note,

        ]);


        //  dd($cart);
        //create order details
        foreach($cart as $key=> $item)
        {
            $data=OrderDetails::create([
                'order_id'=>$order->id,
                // 'product_id'=>$key,
                'item_id'=>$item['id'],
                'quantity'=>$item['quantity'],
                'subtotal'=>$item['subtotal'],
            ]);
        }

        session()->forget('vcart');
        notify()->success('Order placed success.');
        $this->payment($data);

        return redirect()->back();



    }
    public function Payment($data){

        // dd($data);
        
                $post_data = array();
                $post_data['total_amount'] =$data->subtotal; # You cant not pay less than 10
                $post_data['currency'] = "BDT";
                $post_data['tran_id'] = uniqid(); // tran_id must be unique
        
                # CUSTOMER INFORMATION
                $post_data['cus_name'] = 'Customer Name';
                $post_data['cus_email'] = 'customer@mail.com';
                $post_data['cus_add1'] = 'Customer Address';
                $post_data['cus_add2'] = "";
                $post_data['cus_city'] = "";
                $post_data['cus_state'] = "";
                $post_data['cus_postcode'] = "";
                $post_data['cus_country'] = "Bangladesh";
                $post_data['cus_phone'] = '8801XXXXXXXXX';
                $post_data['cus_fax'] = "";
        
                # SHIPMENT INFORMATION
                $post_data['ship_name'] = "Store Test";
                $post_data['ship_add1'] = "Dhaka";
                $post_data['ship_add2'] = "Dhaka";
                $post_data['ship_city'] = "Dhaka";
                $post_data['ship_state'] = "Dhaka";
                $post_data['ship_postcode'] = "1000";
                $post_data['ship_phone'] = "";
                $post_data['ship_country'] = "Bangladesh";
        
                $post_data['shipping_method'] = "NO";
                $post_data['product_name'] = "Computer";
                $post_data['product_category'] = "Goods";
                $post_data['product_profile'] = "physical-goods";
        
                # OPTIONAL PARAMETERS
                $post_data['value_a'] = "ref001";
                $post_data['value_b'] = "ref002";
                $post_data['value_c'] = "ref003";
                $post_data['value_d'] = "ref004";
        
                //  dd($post_data);
        
                $sslc = new SslCommerzNotification();
                # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
                $payment_options = $sslc->makePayment($post_data, 'hosted');
        
                if (!is_array($payment_options)) {
                    print_r($payment_options);
                    $payment_options = array();
                }
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
