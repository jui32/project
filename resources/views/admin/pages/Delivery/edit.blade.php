@extends('admin.pages.master')

@section('content')


<form action="{{ route('Delivery.update',$Delivery_data->id) }}" method="post" enctype= 'multipart/form-data'>
   @csrf 


  <div class="form-group">
    <label for="InputCustomerName">Deliveryman name </label>
    <input type="text" class="form-control" name="name" id="InputCustomerName" aria-describedby="emailHelp" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted" value="{{ $Delivery_data->name }}" >Enter your name</small>
  </div>


  <div class="form-group">
    <label for="InputCustomerEmail"> address </label>
    <input type="text" class="form-control" name="address" id="InputCustomerEmail" aria-describedby="emailHelp" placeholder="Enter your address">
    <small id="emailHelp" class="form-text text-muted" value="{{ $Delivery_data->address }}">Enter your email address</small>
  </div>


  <div class="form-group">
    <label for="InputCustomerNumber">Contact number </label>
    <input type="number" class="form-control" name="number" id="InputCustomerNumber" aria-describedby="emailHelp" placeholder="Enter your number">
    <small id="emailHelp" class="form-text text-muted" value="{{ $Delivery_data->number }}">Enter your Number</small>
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>



</form>
@endsection