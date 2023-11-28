@extends('admin.pages.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="{{ route('category.store') }}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" name="name"class="form-label">Category Name</label>
                <input required type="text" class="form-control" name="category_name">
            </div>  

            {{-- <div class="form-group">
                <label for="InputCategoriesImage">Categories image </label>
                <input type="file" class="form-control" name="image" id="InputCategoriesimage" aria-describedby="emailHelp" placeholder="Enter your name">
                <small id="emailHelp" class="form-text text-muted">add image</small>
              </div> --}}

            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter Category Description:</label>
                <input type="text" class="form-control" name="category_description">
            </div>  
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection