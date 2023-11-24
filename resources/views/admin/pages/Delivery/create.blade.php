@extends('admin.pages.master')

@section('content')


<form action="{{route('Delivery.store')}}" method="post">
   @csrf 


  <div class="form-group">
    <label for="InputCustomerName">Customer name </label>
    <input type="text" class="form-control" name="customername" id="InputCustomerName" aria-describedby="emailHelp" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">Enter your name</small>
  </div>


  <div class="form-group">
    <label for="InputCustomerEmail"> address </label>
    <input type="text" class="form-control" name="customeraddress" id="InputCustomerEmail" aria-describedby="emailHelp" placeholder="Enter your address">
    <small id="emailHelp" class="form-text text-muted">Enter your email address</small>
  </div>


  <div class="form-group">
    <label for="InputCustomerNumber">Contact number </label>
    <input type="number" class="form-control" name="customernumber" id="InputCustomerNumber" aria-describedby="emailHelp" placeholder="Enter your number">
    <small id="emailHelp" class="form-text text-muted">Enter your Number</small>
  </div>




  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>



  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>



</form>
@endsection