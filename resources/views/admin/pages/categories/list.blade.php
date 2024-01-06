@extends('admin.pages.master')

@section('content')
<h1>Category List</h1>

<div class="container">
<a class="btn btn-primary" href="{{route('category.create')}}">Create New Category</a>
<a class="btn btn-danger" href="{{route('category.print')}}">Print</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category_data as $key=>$category_data)
    {{-- @foreach($category_data as $item) --}}
    <tr>
      <th scope="row">{{$category_data->id}}</th>
      <td>{{$category_data->category_name}}</td>
      <td>{{$category_data->category_description}}</td>
      <td>
        <a class ="btn btn-primary btn-sm" href="{{route('category.edit',$category_data->id)}}">Edit</a>
        <a class ="btn btn-danger btn-sm" href="{{route('category.delete',$category_data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection