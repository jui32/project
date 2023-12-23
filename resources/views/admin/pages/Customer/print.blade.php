@extends('admin.pages.master')

@section('content')

<h1>Customer list</h1>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer name</th>
      {{-- <th scope="col">Customer image</th> --}}
      <th scope="col">Birth Date</th>
      <th scope="col">Customer email</th>
      <th scope="col">Password</th>
      <th scope="col">Role </th>
      <th scope="col">Action</th>
     </tr>
  </thead>
  <tbody>
    @foreach($Customer_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->birth_date}}</td>
      {{-- <td>
        <img style="height: 80px;width:80px;" src="{{url('/uploads/customer',$item->image)}}" alt="">
      </td> --}}
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      <td>{{$item->role}}</td>
      <td>
        <a class ="btn btn-danger btn-sm" href="{{route('Customer.delete',$item->id)}}">Delete</a>
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