<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {
        $category_data=Category::all();
        return view('admin.pages.categories.list',compact('category_data'));
    }


    public function view($id){
        $item= Item::find($id);

        $category_data= Category::all();

        return view('admin.pages.Category.view', compact('category_data','item'));

    }


    public function ItemCategory($categoryId){
        $ItemCategory=Category::find($categoryId);
        // dd($ItemCategory);
        return view('frontend.front_pages.category-view',compact('ItemCategory'));

    }


    public function create()
    {
        return view('admin.pages.categories.create');
    }




    public function store(Request $request){
    //    dd($request->all());
        $validate=Validator::make($request->all(),[
            'category_name'=>'required',
            'category_description'=>'required',
        ]);
        if ($validate->fails()){
            notify()->error('Validation Failed!');
            return redirect()->back();
        }

    //    if($request->hasFile('image'))
    //    {
    //     $image=$request->file('image');
    //     //dd($image);
    //     $category_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
    //     $image->storeAs('/categories',$category_image);

    //    }
    //    dd($request->all());


        Category::create([
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,
        ]);
        notify()->success('Category Added Successfully.');
        return redirect(Route('category.list'));

    }
    public function edit($id){

        $category_data=Category::find($id);
        return view('admin.pages.categories.edit',compact('category_data'));
    }
    
    public function update(Request $request,$id)
    {
        
        
        $category_data=Category::find($id);
        //$category_image='';
        
        // if($request->hasFile('image')){
        //     $image=$request->file('image');
        //     // dd($image);
        //     $category_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
        //     $image->storeAs('/categories',$category_image);
            
        // }
        
         $category_data->update([
            'category_name'=>$request->category_name,
             'category_description'=>$request->category_description,
            ]);
            notify()->success('category Updated Successfully.');
            return redirect(Route('category.list'));
            
        }
        
    
        public function delete($id)
    {
      $category_data=Category::find($id);
      if($category_data)
      {
        $category_data->delete();
      }

      notify()->success('category Deleted Successfully.');
      return redirect()->back();
    }

}

