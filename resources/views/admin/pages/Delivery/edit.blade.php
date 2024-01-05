@extends('admin.pages.master')

@section('content')


<form action="{{ route('Delivery.update',$Delivery_data->id) }}" method="post" enctype= 'multipart/form-data'>
   @csrf 


  <div class="form-group">
    <label for="InputCustomerName">Deliveryman name </label>
    <input type="text" class="form-control" name="name" id="InputCustomerName" value="{{ $Delivery_data->name }}" aria-describedby="emailHelp" placeholder="Enter your name" required>
    <small id="emailHelp" class="form-text text-muted">Enter your name</small>
  </div>


  <div class="form-group">
    <label for="InputCustomerEmail"> address </label>
    <input type="text" class="form-control" name="address" id="InputCustomerEmail" value="{{ $Delivery_data->address }}" aria-describedby="emailHelp" placeholder="Enter your address" required>
    <small id="emailHelp" class="form-text text-muted">Enter your email address</small>
  </div>


  <div class="form-group">
    <label for="InputCustomerNumber">Contact number </label>
    <input type="number" class="form-control" name="number" id="InputCustomerNumber" value="{{ $Delivery_data->number }}" aria-describedby="emailHelp" placeholder="Enter your number" required>
    <small id="emailHelp" class="form-text text-muted">Enter your Number</small>
  </div>


 
  <button type="submit" class="btn btn-primary">Update</button>



</form>
@endsection