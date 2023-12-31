<?php

namespace App\Http\Controllers;
use App\Models\Delivery;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function print()
    {
        $Delivery_data=Delivery::all();
        return view('admin.pages.Delivery.print',compact('Delivery_data'));
    }
    public function list(){
        $Delivery_data=Delivery::all();
        return view('admin.pages.Delivery.list',compact('Delivery_data'));

    }
    public function create(){
        return view('admin.pages.Delivery.Create');

    }
    public function store(Request $request){
        Delivery::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number,
        ]);
        return redirect(Route('Delivery.list'));
    }


    public function edit($id){

        $Delivery_data=Delivery::find($id);
        return view('admin.pages.Delivery.edit',compact('Delivery_data'));
    }
    
    public function update(Request $request,$id)
    {
        
        
        $Delivery_data=Delivery::find($id);
        
         $Delivery_data->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number,
            ]);
            notify()->success('Deliveryman Updated Successfully.');
            return redirect(Route('Delivery.list'));
            
        }
        
    
        public function delete($id)
    {
      $Delivery_data=Delivery::find($id);
      if($Delivery_data)
      {
        $Delivery_data->delete();
      }

      notify()->success('Deliveryman Deleted Successfully.');
      return redirect()->back();
    }

    }

