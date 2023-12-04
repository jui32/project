<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class ItemController extends Controller
{
    public function list(){
        $Item_data=Item::with('cat')->get();
        // $Item_data=Item::with(['category']);
        return view ('admin.pages.Item.list',compact('Item_data'));
        
    }


    public function create()
    {
        $categories=Category::all();
        return view('admin.pages.Item.create',compact('categories'));
    }


    public function store(Request $request){
        // dd($request->all());
        $validate=Validator::make($request->all(),[
             'name'=>'required',
             'category'=>'required',
             'price'=>'required',
             'stock'=>'required',
             'item_description'=>'required',
        ]);


        if ($validate->fails()){
            
            return redirect()->back();
        
        
        }

        $item_image=null;
        
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $item_image=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/Item',$item_image);
        }


        Item::create([
            'name'=>$request->name,
            'image'=>$item_image,
            'category_id'=>$request->category,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'item_description'=>$request->item_description,
        ]);
        return redirect()->route('Item.list');


    }
    public function edit($id){
        $Item=Item::find($id);
        $categories = Category::all();
        return view('admin.pages.Item.edit',compact('Item', 'categories'));
    }
    public function update(Request $request,$id)
    {
        $item=Item::find($id);

        // $Item=Item::find($id);

        $item_image=$item->image;
        // dd($item_image);
        if($request->hasfile('image')){
            $image=$request->file('image');
            $item_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/Item',$item_image);

        }
        

        $item->update([
            'name'=>$request->item_name,
            'image'=>$item_image,
            'price'=>$request->item_price,
            'stock'=>$request->item_stock,
            'item_description'=>$request->item_description,
            

        ]);
        notify()->success('Item Updated Successfully.');

        return redirect(Route('Item.list'));
    }

    public function delete($id)
    {
        $Item=Item::find($id);
        if($Item)
        {
            $Item->delete();
        }
        notify()->success('Item Deleted Successfully.');
        return redirect()->back();
    }

    }
    
    





   



