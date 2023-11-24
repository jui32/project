@extends('admin.pages.master')

@section('content')
<h1> Order list </h1>
<div class="container">
{{-- <a class="btn btn-primary" href="{{route('order.create')}}">+Add Item</a> --}}
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">type</th>
    </tr>
  </thead>
  <tbody>
    @foreach($order_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->type}}</td>
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