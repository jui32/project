@extends('admin.pages.master')
@section('content')
<h1>Item List</h1>


<div class="container">
<a class="btn btn-primary" href="{{route('Item.create')}}">+Add Item</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Item Image</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Item_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>
        <img style="height: 80px;width:80px;" src="{{url('/uploads/Item/',$item->image)}}" alt=" image">
      </td>
      <td>{{$item->type}}</td>
      <td>
        <a class ="btn btn-success btn-sm" href="#">View</a>
        <a class ="btn btn-danger btn-sm" href="{{route('Item.delete',$item->id)}}">Delete</a>
        <a class ="btn btn-primary btn-sm" href="{{route('Item.edit',$item->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection