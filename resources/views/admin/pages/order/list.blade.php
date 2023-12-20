@extends('admin.pages.master')

@section('content')
<h1> Order list </h1>
<div class="container">
{{-- <a class="btn btn-primary" href="{{route('order.create')}}">+Add Item</a> --}}
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Total price</th>
      <th scope="col">Payment method</th>
      <th scope="col">Address</th>
      <th scope="col">Receiver Mobile</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Email</th>
      <th scope="col">Order Note</th>
      <th scope="col">Transaction ID</th>
      <th scope="col">Action</th>

 
    </tr>
  </thead>
  <tbody>
    @foreach($order_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->total_price}}</td>
      <td>{{$item->payment_method}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->receiver_mobile}}</td>
      <td>{{$item->receiver_name}}</td>
      <td>{{$item->receiver_email}}</td>
      <td>{{$item->order_note}}</td>
      <td>{{$item->transaction_id}}</td>
      <td>
        <a class ="btn btn-danger btn-sm" href="{{route('order.delete',$item->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection