@extends('frontend.front_pages.master')


@section('content')


<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i class='fa fa-apple fs-1'></i>
                         <span class="fw-bold ms-1 fs-5 ">{{$singleItem->item_id}}</span> </div>
                        <h1 class="fs-1 ms-1 mt-3">{{$singleItem->name}}</h1>
                        <div class="ms-1 p-2 pt-0 border-top-0"><b>Category:</b> <span>{{$singleItem->cat->category_name}}</span> </div>
                        <div class="ms-1 p-2 pt-0 border-top-0"><b>Price:</b> <span>{{$singleItem->price}} .BDT</span> </div>
                        <div class="ms-1 p-2 pt-0 border-top-0"><b>Description:</b> <span>{{$singleItem->item_description}}</span> </div>
                            
                        <div class="mt-5 radio-buttons"> 
                            <a class="btn btn-danger p-0" href="{{ route('add.toCart',$singleItem->id) }}">AddToCart</a>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="item-image"> <img src="{{url('/uploads/Item/'.$singleItem->image)}}"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection