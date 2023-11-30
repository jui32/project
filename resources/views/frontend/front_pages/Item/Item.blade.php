@extends('frontend.front_pages.master')
@section('content')

<div class="container">

@foreach($items as $Item)
<div class='container-fluid'>
        <div class="card mx-auto col-md-3 col-10 mt-5">
        <img style="height:270px; width:270px;" src="{{url('uploads/Item', $Item->image)}}" alt="image">

            <div class="card-body text-center mx-auto">
                <div class='cvp'>

                    <h5 class="card-title font-weight-bold">{{ $Item->name}}</h5>
                    <p class="card-text">{{ $Item->price}}.BDT</p>
                    <a href="#" class="btn details px-auto">view details</a><br />
                    <a href="#" class="btn cart px-auto">Add To Cart</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Type</label>
                <input type="text" class="form-control" name="type"> 
                <label for="">Select Category:</label>
                <select required class="form-control" name="type" id="">
             
                 @foreach ($categories as $cat )
                 <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                 @endforeach
                
                </select>
            </div>  
        </div>

    </div>

@endforeach


</div>

@endsection

{{-- sohag --}}


