@extends('frontend.front_pages.master')

@section('content')

<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($itemsUnderCategory->count()>0)
    @foreach ($itemsUnderCategory as $item)

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- item image-->

                            <a href="{{route('single.item',$item->id)}}">
                                <img class="card-img-top" src="{{ url('uploads/Item/' . $item->image)}}" alt="..." />
                                <!-- item details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- item name-->
                                        <h5 class="fw-bolder">{{$item->name}}</h5>
                                        <!-- item reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- item price-->
                                        <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                                        {{ $item->price }} .BDT
                                    </div>
                                </div>
                            </a>

                            <!-- item actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('add.toCart', $item->id) }}">Add to cart</a></div>
                            </div>
                        </div>
                    </div>   
                @endforeach

                @else

                    <h1>No item found.</h1>
                @endif


</div>
@endsection