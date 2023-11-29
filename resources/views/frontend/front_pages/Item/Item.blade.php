@extends('frontend.front_pages.master')
@section('content')
{{-- body{
    background:#E0E0E0;
}
.details { 
            border: 1.5px solid grey;
            color: #212121;
            width: 100%;
            height: auto;
            box-shadow: 0px 0px 10px #212121;
        }

        .cart {
            background-color: #212121;
            color: white;
            margin-top: 10px;
            font-size: 12px;
            font-weight: 900;
            width: 100%;
            height: 39px;
            padding-top: 9px;
            box-shadow: 0px 5px 10px  #212121;
        }

        .card {
            width: fit-content;
        }

        .card-body {
            width: fit-content;
        }

        .btn {
            border-radius: 0;
        }

        .img-thumbnail {
            border: none;
        }

        .card {
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            border-radius: 5px;
            padding-bottom: 10px;
        }--}}


<div class="container">

@foreach($items as $Item)
<div class='container-fluid'>
        <div class="card mx-auto col-md-3 col-10 mt-5">
        <img style="height:60px; width:60px;" src="{{url('Item/', $Item->image)}}" alt="image">

            <div class="card-body text-center mx-auto">
                <div class='cvp'>

                    <h5 class="card-title font-weight-bold">{{ $Item->name}}</h5>
                    <p class="card-text">{{ $Item->price}}</p>
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


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurant - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content name="keywords">
    <meta content name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/animate/animate.min.css"
        rel="stylesheet">
    <link
        href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link
        href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet" />

    <link href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/css/style.css" rel="stylesheet">

    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 250px !important;
            height: 400px !important;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>


</head>

<body>
    <div class="container-xxl bg-white p-0">

        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
<span class="sr-only">Loading...</span>
</div>
</div> 

       



        <!-- main-->

        
    </div>


    <div class="container">
    {{-- {{$items}} --}}
    {{-- {{$categories}} --}}
        {{-- @foreach ($items as $item)
            <div class="gallery">
                <a target="_blank" href="img/img1.jpg">
                    <img src="{{ asset('uploads/Item/' . $item->image) }}" alt="Cinque Terre" width="800"
                        height="400">
                        <br>Name: <b>{{$item->name}}</b>
                        {{-- <br>Type: <b>{{$item->type}}</b> --}}
                         {{--  <br>Type: <b>{{collect($categories)->where('id', $item->type)->pluck('category_name')->first();}}</b>
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        @endforeach

    </div>





    


    <!-- end main-->


    

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script data-cfasync="false"
        src="https://demo.htmlcodex.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/wow/wow.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/easing/easing.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/waypoints/waypoints.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/counterup/counterup.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/owlcarousel/owl.carousel.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/js/moment.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/js/moment-timezone.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>

    <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/js/main.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
    <script src="https://demo.htmlcodex.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="b60ffd3d09ef56297ef866dd-|49" defer></script>

</body>

</html> --}} 
