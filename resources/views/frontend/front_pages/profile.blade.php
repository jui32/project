@extends('frontend.front_pages.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    
                                    <img src=" {{url('/uploads/customer/'.auth('customer')->user()->image)}}" id="imgProfile" style="width: 150px; height: 150px"
                                        class="img-thumbnail" />

                                        <div class="middle">
                                        <a href="">Edit</a>
                                    </div>
                                  
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a
                                            href="javascript:void(0);">  {{auth('customer')->user()->name}} </a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)">{{$confirm}}</a> Confirmed Orders</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">{{$pending}}</a> Pending Oders</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                        value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo"
                                            role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>

                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                        aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->name}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->birth_date}} 
                                            </div>
                                        </div>
                                        <hr />


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->email}} 
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->address}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">City</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->city}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">State</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->state}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Zip/Postal Code</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->zip}} 
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->number}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Role</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{auth('customer')->user()->role}} 
                                            </div>
                                        </div>



                                    </div>

                                </div>



            
                            <script type="text/javascript">
                                $(document).ready(function () {
                                        $imgSrc = $('#imgProfile').attr('src');
                                        function readURL(input) {
                            
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                            
                                                reader.onload = function (e) {
                                                    $('#imgProfile').attr('src', e.target.result);
                                                };
                            
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $('#btnChangePicture').on('click', function () {
                                            // document.getElementById('profilePicture').click();
                                            if (!$('#btnChangePicture').hasClass('changing')) {
                                                $('#profilePicture').click();
                                            }
                                            else {
                                                // change
                                            }
                                        });
                                        $('#profilePicture').on('change', function () {
                                            readURL(this);
                                            $('#btnChangePicture').addClass('changing');
                                            $('#btnChangePicture').attr('value', 'Confirm');
                                            $('#btnDiscard').removeClass('d-none');
                                            // $('#imgProfile').attr('src', '');
                                        });
                                        $('#btnDiscard').on('click', function () {
                                            // if ($('#btnDiscard').hasClass('d-none')) {
                                            $('#btnChangePicture').removeClass('changing');
                                            $('#btnChangePicture').attr('value', 'Change');
                                            $('#btnDiscard').addClass('d-none');
                                            $('#imgProfile').attr('src', $imgSrc);
                                            $('#profilePicture').val('');
                                            // }
                                        });
                                    });	</script>
                            <hr>
                            <table class="table" align="center">
                                <thead>
                                  <tr>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Delivery Man</th>
                                    <th scope="col">Action</th> 
                                  </tr>
                                </thead>
                               
                                <tbody>
                                @foreach($list as $order)
                                  <tr>
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ $order->created_at}}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td>{{$order->deliver->name ?? null}}</td>

                                    <td> <a class="btn btn-danger" href="{{route('Order.details',$order->id)}}">View</a> </td>
                                 
                                     
                                  
                                  </tr>
                                  
                                  @endforeach
                                  
                                </tbody>
                              </table>
                            </body>
                            </html>
                    
                            @endsection