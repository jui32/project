@extends('frontend.front_pages.master')


@section('content')


<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i class='fa fa-apple fs-1'></i>
                         <span class="fw-bold ms-1 fs-5">{{$ItemCategory->item_id}}</span> </div>
                        <h1 class="fs-1 ms-1 mt-3">{{$ItemCategory->name}}</h1>
                        <div class="ms-1"> <span>{{$ItemCategory->description}}</span> </div>
                        <div class="ms-1"> <span>{{$ItemCategory->price}} BDT</span> </div>
                        <div class="mt-5 radio-buttons"> <label class="radio"> <input type="radio" name="code" value="grey" checked> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="pink"> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="black"> <span></span> </label> </div>
                        <div> <button class="button"> <span>Add to Cart</span> <i class="ms-2 fa fa-long-arrow-right"></i> </button> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-image"> <img src="{{url('/uploads/Item/'.$ItemCategory->image)}}"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection