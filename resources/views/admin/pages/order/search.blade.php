@extends('admin.pages.master')

@section('content')

<br>

<h4>Search result for : {{ request()->search }} found {{$items->count()}} items.</h4>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



    @if($items->count()>0)
    @foreach ($items as $items)

    <div class="col mb-5">
        <div class="card h-100">




            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">


                    <!-- Product name-->
                    <h5 class="fw-bolder">{{$items->id}}</h5>





                </div>
            </div>
            </a>


            @endforeach

            @else

            <h1>No item found.</h1>
            @endif

        </div>
    </div>
    @endsection
