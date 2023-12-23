<?php

namespace App\Http\Controllers;
use App\Models\Customer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function print()
    {
        $Customer_data=Customer::all();
        return view('admin.pages.Customer.print',compact('Customer_data'));
    }
    public function list(){
        $Customer_data=Customer::all();
        return view('admin.pages.Customer.list',compact('Customer_data'));

    }

    public function edit($id){
        $Customer=Customer::find($id);
        return view('admin.pages.Customer.edit',compact('Customer'));
    }
    public function update(Request $request,$id)
    {
        $Customer=Customer::find($id);

        // $Item=Item::find($id);

        // $Customer_image=$Customer->image;
        // // dd($Customer_image);
        // if($request->hasfile('image')){
        //     $image=$request->file('image');
        //     $Customer_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
        //     $image->storeAs('/Customer',$Customer_image);

        // }
        

        $Customer->update([
            'name'=>$request->name,
        // 'image'=>$image,
        'birth_date'=>$request->birth_date,
        'email'=>$request->email,
        'role'=>'customer',
        'password'=>bcrypt($request->password),
        ]);
        notify()->success('Customer Updated Successfully.');

        return redirect(Route('Customer.list'));
    }


    public function delete($id)
    {
        $Customer=Customer::find($id);
        if($Customer)
        {
            $Customer->delete();
        }
        notify()->success('Customer Deleted Successfully.');
        return redirect()->back();
    }






















    // public function create(){
       
    //     return view('admin.pages.Customer.create');
    // }
    // public function store(Request $request){
    //     // dd($request->all());
       

    //    $customer_image='';

    //    if($request->hasFile('image')){
    //     $image=$request->file('image');
    //     // dd($image);
    //     $customer_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
    //     $image->storeAs('/Customer',$customer_image);

    //    }
       



    //     Customer::create([
    //         'customername'=>$request->customername,
    //         'image'=>$customer_image,
    //         'customeremail'=>$request->customeremail,
    //         'role'=>'customer',
    //         'password'=>bcrypt($request->password),
    //         'customernumber'=>$request->customernumber,
    //     ]);
    //     return redirect(Route('Customer.list'));
    // }
    }
