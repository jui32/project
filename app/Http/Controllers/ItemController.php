<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function list(){
        $Item_data=Item::all();
        return view ('admin.pages.Item.list',compact('Item_data'));
        
    }


    public function create()
    {
        return view('admin.pages.Item.create');
    }


    public function store(Request $request){

        $validate=Validator::make($request->all(),[
             'name'=>'required',
             'type'=>'required',

        ]);


        if ($validate->fails()){
            
            notify()->error('Validation failed.');
            return redirect()->back();
        
        
        }

        $item_image='';
        
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $item_image=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/Item',$item_image);
        }


        Item::create([
            'name'=>$request->name,
            'image'=>$item_image,
            'type'=>$request->type,
        ]);
        return redirect(Route('Item.list'));


    }
    public function edit($id){
        $Item=Item::find($id);
        return view('admin.pages.Item.edit',compact('Item'));
    }
    public function update(Request $request,$id)
    {

        $Item=Item::find($id);

        if($request->hasfile('image')){
            $image=$request->file('image');
            $item_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/Item',$item_image);

        }

        $Item->update([
            'name'=>$request->name,
            'image'=>$request->image,
            'type'=>$request->type,
            

        ]);
        notify()->success('Category Updated Successfully.');

        return redirect(Route('Item.list'));
    }

    public function delete($id)
    {
        $Item=Item::find($id);
        if($Item)
        {
            $Item->delete();
        }
        notify()->success('Category Deleted Successfully.');
        return redirect()->back();
    }

    }
    
    





   



