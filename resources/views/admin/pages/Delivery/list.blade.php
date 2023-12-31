@extends('admin.pages.master')


@section('content')
<h1>Delivery details</h1>


<div class="container">
  <a class="btn btn-primary" href="{{route('Delivery.create')}}">Add New Deliveryman</a>
  <a class="btn btn-danger" href="{{route('Delivery.print')}}">Print</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Delivery_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->number}}</td>

      <td>
        <a class ="btn btn-primary btn-sm" href="{{route('Delivery.edit',$item->id)}}">Edit</a>
        <a class ="btn btn-danger btn-sm" href="#">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection