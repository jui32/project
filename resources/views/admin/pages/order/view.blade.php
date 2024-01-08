@extends('admin.pages.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Simple Invoice - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}
.table > tbody > tr > .no-line {
    border-top: none;
}
.table > thead > tr > .no-line {
    border-bottom: none;
}
.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <div class="container">

    <div class="row">
		<a class="btn btn-primary" href="{{route('order.printview',$order->id)}}">Print</a>

        <div class="col-xs-12">
    		<div class="invoice-title">
    			{{-- <h2>Invoice</h2><h3 class="pull-right">{{$order->id}}</h3> --}}
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					{{$order->user_id}}<br>
						{{$order->address}}<br>
						

    				</address>
    			</div>
               

    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
                    {{$order->user_id}}<br>
					{{$order->address}}<br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					SSLCommerz<br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{$order->created_at}}<br><br>
						<p>Status: {{$order->status}}</p>
    				</address>

    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-hover">
                            <thead>
                              <tr>
                                <th class="text-center"  scope="col">Id</th>
                                <th class="text-center"scope="col">Item Name</th>
                                <th class="text-center"scope="col">Quantity</th>
                                <th class="text-end"scope="col">Price</th>
                              </tr>
                            </thead>
                            <tbody>
								@php 
									$subT = 0; 
								@endphp
                                @foreach($order->details as $item)
								@php 
									$subT = $subT + $item->subtotal;
								@endphp
    							<tr class="border">
    								<td class="text-center">{{$item->id}}</td>
    								<td class="text-center">{{$item->item->name}}</td>
    								<td class="text-center">{{$item->quantity}}</td> 
    								<td class="text-end">{{$item->subtotal}}</td>
    							</tr>
                                @endforeach
                               
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">{{$subT}}.BDT</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">70 .BDT</td> 
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">{{$order->total_price}}</td>
    							</tr>

                                {{-- <a class ="btn btn-primary btn-sm" href="#">Update</a> --}}

    						</tbody>
                            
                          </table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>	<script type="text/javascript">
		</script>
</body>
</html>



<form action="{{route('order.view.deliveryman',$order->id)}}" method="post">
    
@csrf
    <div class="form-group">
        <label for="InputPaymentMethod">Status:</label>
        <select name="status" id="" class="form-control" required>
        <option value="completed">completed</option>
        <option value="ontheway">on the way</option>
		<option value="processing">processing</option>
		<option value="cancelled">cancelled</option>


        </select>
    </div>

	<div class="form-group">
        <label for="InputPaymentMethod">Delivery man:</label>
		<select name="deliveryMan" id="" class="form-control" required>
		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<option value="" selected disabled> Select Delivery Man </option>
			@foreach ($deliveryman as $delivery)
			{{-- <li>
				<a class="dropdown-item" href="{{ route('Delivery.list',$delivery->id) }}">{{$delivery->name}}</a>
			</li> --}}
			<option value={{$delivery->id}} {{ $delivery->id == $order->deliveryMan ? "selected" : "" }}> {{$delivery->name}} </option>
			@endforeach
		  </ul>
		</select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
   
   

   
       
         
       
    
