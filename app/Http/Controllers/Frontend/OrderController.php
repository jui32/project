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
        //  dd($request->all());
       
        // dd($request->all());

        $cart=session()->get('vcart');
        // dd($cart);
        //create order
        $order=Order::create([
            'user_id'=>auth('customer')->user()->id,
            'total_price'=>array_sum(array_column($cart,'subtotal')) +70,
            'status'=>'pending',
            'payment_status'=>'null',
            'address'=>$request->address,
            'receiver_mobile'=>$request->phone_number,
            'receiver_name'=>$request->name,
            'receiver_email'=>$request->email_address,
            'order_note'=>$request->order_note,
            'transaction_id'=>date('YmdHis'),
            'deliveryman'=>'null',

            
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
       
        $this->payment($order);
         notify()->success('Order placed success.');
        return redirect()->view('home');



    }

    public function payment($order)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        // dd($order);
        $post_data = array();
        $post_data['total_amount'] = $order->total_price; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $order->transaction_id; // tran_id must be unique

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

        #Before  going to initiate the payment order status need to insert or update as Pending.
        // $update_product = DB::table('orders')
        //     ->where('transaction_id', $post_data['tran_id'])
        //     ->updateOrInsert([
        //         'name' => $post_data['cus_name'],
        //         'email' => $post_data['cus_email'],
        //         'phone' => $post_data['cus_phone'],
        //         'amount' => $post_data['total_amount'],
        //         'status' => 'Pending',
        //         'address' => $post_data['cus_add1'],
        //         'transaction_id' => $post_data['tran_id'],
        //         'currency' => $post_data['currency']
        //     ]);

        // dd($post_data);

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
    public function order_details($id){
        $order = Order::with('details')->find($id);
        // dd($order->total_price);
        // dd($order);
        return view('frontend.front_pages.order_details',compact('order'));
    }


}
