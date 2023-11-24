@extends('admin.pages.master')

@section('content')
<h1>Category List</h1>

<div class="container">
<a class="btn btn-primary" href="{{route('category.create')}}">Create New Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->category_name}}</td>
      <td>
        <img style="height: 80px;width:80px;" src="{{url('/uploads/categories/',$item->image)}}" alt="no image">
      </td>
      <td>{{$item->category_description}}</td>
      <td>
        <a class ="btn btn-success btn-sm" href="">Edit</a>
        <a class ="btn btn-danger btn-sm" href="{{route('category.delete',$item->id)}}">Delete</a>
        <a class ="btn btn-primary btn-sm" href="#">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection