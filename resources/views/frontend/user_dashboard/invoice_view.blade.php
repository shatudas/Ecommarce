@php

$setting=DB::table('setting_information')->first();
$contenttable=DB::table('contuct')->first();

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="MHS">
	<title>Invoice Page</title>

	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	 
  <style type="text/css">
    @media print {
    input#btnPrint {
    display: none;
    }
   }
  </style> 

</head>
<body style="background-color:#f2f2f2;">

 <div class="container mt-5">

  <div class="row justify-content-center">
   <div class=" col-sm-9" style="background-color:#f4f4f4; padding:0px;">
    <div class="card card-shadow" style="padding:0px;">
     <div class="card-body m-0 p-0">
      
      <div class="row p-0 m-0">

      	<div class="col-sm-12 p-1" style="background-color:#f3f3ff; ">
      		<div class="row">
      	  <div class="col-sm-6">
      		   <img src="{{ asset($setting->setting_image) }}"  style="height:40px; padding:10px;">
       	   <br/>
      	  </div>
      	  <div class="col-sm-6">
      		  <h3 class="mt-2 mr-4" style="float:right; ">INVOICE</h3>
      	  </div>
      		</div>
      	</div>

       <div class="col-sm-6 mb-2">
        <span>{{ $setting->email }}</span> <br/>
       </div>
       <div class="col-sm-6 text-md-right mb-2">
       	@if(isset($adddata))
        <span>Invoice # {{$adddata->id}}</span> <br/>
        <span>Date: {{ $adddata->order_date }}</span>
        @endif
       </div>

      </div>

      <div class="row">

       <div class="col-sm-6 mb-3 pl-5">
        <h6><strong>TO:</strong></h6>
        <span>{!! $contenttable->details !!}</span> <br/>
        <span>+{{ $contenttable->phone }}</span> 
       </div>

       <div class="col-sm-6 mb-3">
        <h6><strong>FROM </strong></h6>
        @if(isset($adddata))
        <span><strong>Name</strong> 
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        : {{ $adddata->name }}</span><br/>
        <span><strong>Phone</strong>  
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	: {{ $adddata->phone }}</span><br/>

     
        <span><strong>Email</strong>
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	: {{ $adddata->email }}</span><br/>
        <span><strong>Shiping Adddress</strong>
       
        	:{{ $adddata->address }}</span><br/>

        @endif
       </div>

       <div class="col-sm-12 mb-4">
        <center><strong style="text-transform:uppercase; border-bottom:2px solid #F7BD5D; padding-bottom:8px;">Invoice Detalis</strong></center>
       </div>

       <div class="col-sm-12 ">
        <table class="table table-sm table-bordered table-striped " style="width:95%;" align="center">
         <thead>
          <tr>
           <th scope="col"># SL</th>
           <th scope="col">Product Name</th>
           <th scope="col">Price</th>
           <th scope="col">Quantity</th>
           <th scope="col">Size</th>
           <th scope="col">Color</th>
           <th scope="col">Total</th>
          </tr>
         </thead>
         <tbody>

         	@php
           	$i=1;
           	$total=0;
         	@endphp

         	@if(isset($data))
         	@foreach($data as $invoicedata)

         	@php
         	$total=$total+$invoicedata->total_price;
         	@endphp

          
          <tr>
          	<td>{{$i++}}</td>
          	<td>{{$invoicedata->product_name}}</td>
          	<td>{{$invoicedata->price}}</td>
          	<td align="center">{{$invoicedata->qty}}</td>
          	<td>{{$invoicedata->size}}</td>
          	<td>{{$invoicedata->color}}</td>
          	<td align="right">{{$invoicedata->total_price}}</td>
          </tr>


          @endforeach
			       @endif

         </tbody>
        </table>
       </div>

       <div class="col-sm-4 ml-auto">
        <table class="table table-sm table-bordered table-striped" style="width:95%; margin-left:-10px;">
         <tbody>

          <tr>
           <td>Sub Total</td>
           <td align="right">{{$total}}</td>
          </tr>
          <tr>
           <td>
            <strong>GRAND TOTAL</strong>
           </td>
           <td align="right"><strong>{{ $total }}</strong></td>
          </tr>

         </tbody>
        </table>
       </div>

       </div>

       <div class="col-sm-12 m-2">
        <div class="row">
          <div class="col-6">
            <Strong>Note:</Strong>
            <strong class="f12">Thanks for Your Purchases</strong>
          </div>
          <div class="col-6">
            <input type="button" id="btnPrint" class="btn btn-outline-primary btn-sm" onclick="window.print();" value="Print" align="right" style="float:right;">
          </div>
        </div>
       </div>

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>



</body>
</html>


