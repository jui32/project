@extends('admin.pages.master')

@section('content')

<h1>Customer list</h1>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer name</th>
      {{-- < thscope="col">Customer image</th> --}}
      <th scope="col">Customer email</th>
      <th scope="col">Customer Phone Number </th>
      <th scope="col">Action</th>
     </tr>
  </thead>
  <tbody>
    @foreach($Customer_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      {{-- <td>
        <img style="height: 80px;width:80px;" src="{{url('/uploads/customer',$item->image)}}" alt="">
      </td> --}}
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      <td>
        <a class ="btn btn-success btn-sm" href="#">Edit</a>
        <a class ="btn btn-danger btn-sm" href="#">Delete</a>
        <a class ="btn btn-primary btn-sm" href="#">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection