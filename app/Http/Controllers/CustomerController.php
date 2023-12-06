<?php

namespace App\Http\Controllers;
use App\Models\Customer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function list(){
        $Customer_data=Customer::all();
        return view('admin.pages.Customer.list',compact('Customer_data'));

    }
    public function create(){
       
        return view('admin.pages.Customer.create');
    }
    public function store(Request $request){
        // dd($request->all());
       

       $customer_image='';

       if($request->hasFile('image')){
        $image=$request->file('image');
        // dd($image);
        $customer_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
        $image->storeAs('/Customer',$customer_image);

       }
       



        Customer::create([
            'customername'=>$request->customername,
            'image'=>$customer_image,
            'customeremail'=>$request->customeremail,
            'role'=>'customer',
            'password'=>bcrypt($request->password),
            'customernumber'=>$request->customernumber,
        ]);
        return redirect(Route('Customer.list'));
    }
    }
