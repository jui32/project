<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        // session()->flush();
        
        return view('frontend.front_pages.cart');
    }


    public function addToCart($iId)
    {
        $Item=Item::find($iId);

        $cart=session()->get('vcart');
        if($cart)
        {
            //not empty

            if(array_key_exists($iId,$cart)){//yes
                //qty update
                $cart[$iId]['quantity']=$cart[$iId]['quantity'] + 1;
                $cart[$iId]['subtotal']=$cart[$iId]['quantity'] * $cart[$iId]['price'];

            session()->put('vcart',$cart);
            notify()->success('Quantity updated.');
            return redirect()->back();


            }else{//no
                //add to cart
                $cart[$iId]=[
                    'id'=>$iId,
                    'name'=>$Item->name,
                    'price'=>$Item->price,
                    'image'=>$Item->image,
                    'quantity'=>1,
                    'subtotal'=>1 * $Item->price,
            ];

            session()->put('vcart',$cart);
            notify()->success('Item added to cart successfully.');
            return redirect()->back();

            }

            return redirect()->back();

        }else{//empty
            //add to cart
            $newCart[$iId]=[
                    'id'=>$iId,
                    'name'=>$Item->name,
                    'price'=>$Item->price,
                    'quantity'=>1,
                    'subtotal'=>1 * $Item->price,
            ];

            session()->put('vcart',$newCart);
            notify()->success('Item added to cart successfully.');
            return redirect()->back();

        }



        return view('frontend.front_pages.cart');
    }
    public function checkout()
    {
        return view('frontend.front_pages.checkout');
    }

  
}


