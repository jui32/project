@extends('admin.pages.master')


@section('content')
<h1>Delivery details</h1>


<div class="container">
{{-- <a class="btn btn-primary" href="{{route('Delivery.create')}}">+Add Delivery</a> --}}
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Delivery_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->eliveryname}}</td>
      <td>{{$item->customeraddress}}</td>
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