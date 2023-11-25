@extends('admin.pages.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="{{route('Item.update',$Item_data->id)}}" method="post" enctype= 'multipart/form-data'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" name="item_name"class="form-label">Name</label>
                <input type="text" class="form-control" name="item_name">
            </div>  
            <div class="form-group">
                <label for="InputItemImage">Item image </label>
                <input type="file" class="form-control" name="image" id="InputItemimage" aria-describedby="emailHelp" placeholder="Add picture">
                <small id="emailHelp" class="form-text text-muted">add image</small>
              </div>
            <div class="mb-3">


                <div class="form-group">
                    <label for="">Select Category:</label>
                   <select required class="form-control" name="category_id" id="">
                
                    @foreach ($category_data as $cat )
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                   
                   </select>
                  </div>
                
                  <div class="form-group">
                    <label for="">Enter Price: </label>
                    <input required type="number" class="form-control" placeholder="Enter price" name="item_price">
                    
                    @error('itemt_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                  </div>
                
                  <div class="form-group">
                    <label for="">Enter Stock: </label>
                    <input required type="number" class="form-control" placeholder="Enter Stock" name="item_stock">
                  </div>

                  <div class="form-group">
                    <label for="">Enter Item Description:</label>
                     <textarea class="form-control" placeholder="Enter product short description" name="item_description" id="" cols="30" rows="5"></textarea>
                    </div>
                
                










             {{-- <label for="exampleInputEmail1" class="form-label">Type</label>
                <input type="text" class="form-control" name="type">  --}}
                {{-- <label for="">Select Category:</label>
                <select required class="form-control" name="type" id="">
             
                 {{-- @foreach ($categories as $cat )
                 <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                 @endforeach
                 --}} 
                </select>
            </div>  
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection