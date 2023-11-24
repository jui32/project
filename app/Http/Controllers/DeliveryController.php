<?php

namespace App\Http\Controllers;
use App\Models\Delivery;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function list(){
        $Delivery_data=Delivery::all();
        return view('admin.pages.Delivery.list',compact('Delivery_data'));

    }
    public function create(){
        return view('admin.pages.Delivery.Create');

    }
    public function store(Request $request){
        Delivery::create([
            'customername'=>$request->customername,
            'customeraddress'=>$request->customeraddress,
            'customernumber'=>$request->customernumber,
        ]);
        return redirect(Route('Delivery.list'));
    }


    }

