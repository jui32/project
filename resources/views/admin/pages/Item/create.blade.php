@extends('admin.pages.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="{{ route('Item/store') }}" method="post" enctype= 'multipart/form-data'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" name="name"class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>  
            <div class="form-group">
                <label for="InputItemImage">Item image </label>
                <input type="file" class="form-control" name="image" id="InputItemimage" aria-describedby="emailHelp" placeholder="Add picture">
                <small id="emailHelp" class="form-text text-muted">add image</small>
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Type</label>
                <input type="text" class="form-control" name="type">
            </div>  
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection