<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function list(){
        $order_data=order::all();
        return view('admin.pages.order.list',compact('order_data'));
    }
    public function create(){
        return view('admin.pages.order.create');
    }
    public function store(Request $request){
            // dd($request->all());
            $validate=Validator::make($request->all(),[
                'name'=>'required|name',
                'number'=>'required|min:8'
            ]);
    if($validate->fails()){
        return redirect()->back()->withErrors($validate);
    }
    {
        order::create([
            'email'=>$request->email,
            'password'=>$request->password,

        ]);

        return redirect(Route('order.list'));
    }

}
}
