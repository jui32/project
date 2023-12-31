@extends('admin.pages.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="{{ route('category.update',$category_data->id) }}" method="post" enctype= 'multipart/form-data'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" name="name"class="form-label">Category Name</label>
                <input type="text" class="form-control" name="category_name" value="{{$category_data->category_name}}">
            </div>  

            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter Category Description:</label>
                <input type="text" class="form-control" name="category_description" value="{{$category_data->category_description}}" >
            </div>  
            
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection