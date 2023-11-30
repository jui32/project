@extends('frontend.front_pages.master')

@section('content')

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Food is Life</p>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/he.png" alt>
            </div>
        </div>
    </div>
</div>

</div>


<div class="container">

{{-- {{$items}} --}}
{{-- {{$categories}} --}}
@foreach ($items as $item)
<div class="gallery">
<a target="_blank" href="img/img1.jpg">

    <a href="{{route('single.item',$item->id)}}">
    <img src="{{ asset('uploads/Item/' . $item->image) }}" alt="Cinque Terre" width="800"
        height="400">
        {{-- <br>Name: <b>{{$item->name}}</b> --}}
        <h5 class="fw-bolder">{{$item->name}}</h5>
        <div class="d-flex justify-content-center small text-warning mb-2">
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
        </div>
       {{-- <br>Type: <b>{{$item->type}}</b> --}}
        {{ $item->price }} .BDT 
       <br>Type: <b>{{collect($categories)->where('id', $item->type)->pluck('category_name')->first();}}</b>
       </a>
       {{-- <a class="btn btn-danger p-0" href="{{ route('add.toCart',$item->id) }}">AddToCart</a> --}}
{{-- <div class="desc">Add a description of the image here</div> --}}

 <!-- Product actions-->
 <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    <div class="text-center mb-1">
        <a class="btn btn-danger p-0" href="{{ route('add.toCart',$item->id) }}">AddToCart</a>
    </div> 
    {{-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add.toCart',$item->id)}}">Add to cart</a></div> --}}
    <div class="text-center">
        <a class="btn btn-outline-dark mt-auto" href="{{route('buy.now',$item->id)}}">Buy Now</a>
    </div>
</div>
</div>

@endforeach

</div>





<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
   <div class="text-center">
  <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
    <h1 class="mb-5">Our Clients Say!!!</h1>
</div>
<div class="owl-carousel testimonial-carousel">
    <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
        </p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h5 class="mb-1">Client Name</h5>
                <small>Profession</small>
            </div>
        </div>
    </div>
    <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
        </p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h5 class="mb-1">Client Name</h5>
                <small>Profession</small>
            </div>
        </div>
    </div>
    <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
        </p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h5 class="mb-1">Client Name</h5>
                <small>Profession</small>
            </div>
        </div>
    </div>
    <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
        </p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h5 class="mb-1">Client Name</h5>
                <small>Profession</small>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
