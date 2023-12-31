@extends('admin.pages.master')
@section('content')
<h1>Item List</h1>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Item Image</th>
      <th scope="col">Category</th>
      <th scope="col">Item Price</th>
      <th scope="col">Item Stock</th>
      <th scope="col">Item Status</th>
      <th scope="col">Item Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- @dd($Item_data) --}}
    @foreach($Item_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>
        <img style="height: 80px;width:80px;" src="{{url('/uploads/Item/',$item->image)}}" alt=" image">
      </td>
      <td>{{$item->cat->category_name}}</td>
      <td>{{$item->price}} .BDT</td>
      <td>{{$item->stock}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->item_description}}</td>
      
      <td>
        <a class ="btn btn-success btn-sm" href="#">View</a>
        <a class ="btn btn-danger btn-sm" href="{{route('Item.delete',$item->id)}}">Delete</a>
        <a class ="btn btn-primary btn-sm" href="{{route('Item.edit',$item->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
<button onclick="printlist()">Print List</button>
<script>
    function printlist(){
        window.print();
    }
</script>
  </tbody>
</table>
</div>
@endsection