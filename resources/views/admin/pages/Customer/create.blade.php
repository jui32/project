@extends('admin.pages.master')

@section('content')


<form action="{{route('Customer.store')}}" method="post" enctype="multipart/form-data">
   @csrf 


  <div class="form-group">
    <label for="InputCustomerName">Customer name </label>
    <input type="text" class="form-control" name="customername" id="InputCustomerName" aria-describedby="InputCustomerName" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">Enter your name</small>
  </div>


  {{-- <div class="form-group">
    <label for="InputCustomerName">Customer image </label>
    <input type="file" class="form-control" name="image" id="InputCustomerimage" aria-describedby="emailHelp" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">add image</small>
  </div> --}}


  <div class="form-group">
    <label for="InputCustomerEmail"> Email address </label>
    <input type="email" class="form-control" name="customeremail" id="InputCustomerEmail" aria-describedby="emailHelp" placeholder="Enter your email">
    <small id="emailHelp" class="form-text text-muted">Enter your email address</small>
  </div>

 

  <div class="form-group">
    <label for="InputCustomerNumber">Contact number </label>
    <input type="number" class="form-control" name="customernumber" id="InputCustomerNumber" aria-describedby="InputCustomerNumber" placeholder="Enter your number">
    <small id="emailHelp" class="form-text text-muted">Enter your Number</small>
  </div>




  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="InputCustomerRole">Role </label>
    <input type="text" class="form-control" name="role" id="InputCustomerEmail" aria-describedby="InputCustomerRole" placeholder="Enter your role">
    <small id="emailHelp" class="form-text text-muted">Enter your role</small>
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>



</form>
@endsection