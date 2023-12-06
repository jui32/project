@extends('frontend.front_pages.master')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($items as $item)
            <div class="col-3 mt-3">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                    </div>
                    <!-- Product image-->
    
                    <a href="{{ route('single.item', $item->id) }}">
                        <img class="card-img-top" src="{{ url('uploads/Item/' . $item->image) }}" alt="...">
                       
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $item->name }}</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                {{-- <br>Type: <b>{{$item->type}}</b> --}}
                                {{ $item->price }} .BDT
                                <br>Category: <b>{{$item->cat->category_name}}</b>
                            </div>
                        </div>
                    </a>
    
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1">
                            <a class="btn btn-danger p-0" href="{{ route('add.toCart', $item->id) }}">AddToCart</a>
                        </div>
                        {{-- <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="{{ route('buy.now', $item->id) }}">Buy
                                Now</a>
                        </div> --}}
                    </div>
                </div>
            </div>
       
        </div>
        @endforeach    
            
        </div>
    

    </div>
@endsection
