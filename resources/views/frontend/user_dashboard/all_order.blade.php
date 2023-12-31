@extends('frontend.layouts.index')
@section('homecontent')

<div class="col-md-12" style="background-color:#F7F8FA; ">
	<div class="container-fluid padd py-4">
		<div class="row">

			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 mt-4">

				<div class="col-md-12 p-0 pt-4 pb-4 userdashboard">
				
				<center>
						<form method="post" action="{{ route('profileUp',Auth()->user()->id) }}" class="btn-submit" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="old_image" value="{{ Auth()->user()->image}}">
							
							<div class="profile-pic">
								<label class="-label" for="file">
									<span class="glyphicon glyphicon-camera"></span>
									<span>Change Profile</span>
								</label>

								<input id="file" type="file" name="image" onchange="loadFile(event)"/ required="">

								@if( Auth()->user()->image)
									<img src="{{ Auth()->user()->image }}" id="output" >
								@else
									<img src="{{ asset('profile.gif') }}" id="output">
								@endif

							</div>

							<button class="btn btn-primary btn-sm" id="profile" type="" style="box-shadow: none;">Upate Profile</button><br>
							<strong >{{ Auth()->user()->name }}</strong>

						</form>
					</center>

					<div class="mt-4" id="menu">
						<li class="">
							<a href="{{ route('userdashboard') }}">
								<i class="fa fa-tachometer" aria-hidden="true"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;Dashboard
							</a>
						</li>
						<li class=" active ">
							<a href="{{ route('all_order') }}">
								<i class="fa fa-list-ul" aria-hidden="true"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;Order Information
							</a>
						</li>
						<li class="">
							<a href="{{ route('updateinformation') }}">
								<i class="fa fa-user-circle-o" aria-hidden="true"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;Basic Information
							</a>
						</li>
						<li class="">
							<a href="{{ route('changepassword') }}">
								<i class="fa fa-key" aria-hidden="true"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;Change Password
							</a>
						</li>
						<li>
							<a href="{{ route('/') }}">
								<i class="fa fa-shopping-basket" aria-hidden="true"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;Go To Shopping
							</a>
						</li>
						<li>
							<a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								<i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									 @csrf
								</form>
						</li>
					</div>

						</div>
					</div>

					<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 mt-4">
						<div class="col-md-12 p-4 userdashboard">

							<strong>All Orders</strong><br><br>
							<div class="table-responsive">

								<table id="example" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Order Id</th>
											<th>View Invoice</th>
											<th>Order Date</th>
											<th>Payment</th>
											<th>Status</th>
										</tr>
									</thead>

									<tbody>

										@if(isset($adddata))
										@foreach($adddata as $OrderData)
										
										<tr>
											<td title="view invoice" >
												<a href="{{route('invoice',$OrderData->id)}}" class="text-dark font-weight-bold" target="_blabk">
													{{$OrderData->id}}
												</a>
											</td>

											<td>
												<a href="{{route('invoice',$OrderData->id)}}">
													<center><i class="fa fa-file-pdf-o" style="color:#FEC64D; font-size:24px;"></i></center>
												</a>
											</td>
											<td>{{ $OrderData->order_date }}</td>
											
											<td>{{ $OrderData->prement_method }}</td>
											<td>

												@if($OrderData->status==0)
												<span class="orderstatus bg-dark">Panding</span>
												@elseif($OrderData->status==1)
												<span class="orderstatus bg-dark">Processing</span>
												@elseif($OrderData->status==2)
												<span class="orderstatus bg-dark">Shiping</span>
												@elseif($OrderData->status==3)
												<span class="orderstatus bg-dark">Completd</span>
												@endif
											</td>

										</tr>


										@endforeach
										@endif

										

									</tbody>
								</table>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>


		<style type="text/css">

			#profile{
				background-color:#FF8500;
				border:none;
				border-radius:0px;
			}

			#menu li a i{
				color:#FF5500;
			}

			#menu li a{
				text-decoration: none !important;
			}
			.profile-pic {
				color: transparent;
				transition: all 0.3s ease;
				display: flex;
				justify-content: center;
				align-items: center;
				position: relative;
				transition: all 0.3s ease;

			}
			.profile-pic input {
				display: none;

			}
			.profile-pic img {
				position: absolute;
				object-fit: cover;
				width: 150px;
				height: 150px;
				z-index: 0;
				box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px 0 rgba(0,0,0,0.06);
			}
			.profile-pic .-label {
				cursor: pointer;
				height: 150px;
				width: 150px;
			}
			.profile-pic:hover .-label {
				display: flex;
				justify-content: center;
				align-items: center;
				background-color: rgba(0, 0, 0, .4);
				z-index: 10000;
				color: #fafafa;
				transition: background-color 0.3s ease-in-out;
				border-radius: 100px;
			}
			.profile-pic span {
				display: inline-flex;
				padding: 0.2em;
				height: 2em;
				font-size: 13px;
			}


			.userdashboard{
				background: #fff;
				border-radius: 5px;
				box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px 0 rgba(0,0,0,0.06);
			}

			.userdashboard img{
				border-radius:50%;
				width: 150px;
				height: 150px;
				box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px 0 rgba(0,0,0,0.06);
			}

			.userdashboard strong{
				font-size: 20px;
			}

			.userdashboard li{
				display: block;
				list-style: none;
				padding: 12px 20px;
				transition: 0.3s;
			}

			.userdashboard li a{
				color: #414141;
				font-size: 15px;


			}

			.userdashboard li:hover{
				background: #f8f8f8;
			}


			.userdashboard .active{
				background: #f8f8f8;
				border-left: 4px solid #FF5500;
			}

			.userdashboard th{
				font-size: 15px;
				width: 10%;
				border: none;

			}


			.userdashboard td{
				font-size: 14px;
				border: none;

			}

			.userdashboard label{
				font-size:25px;
			}


			.userdashboard a{
				color: #fff;
			}

			.userdashboard .dash{
				color: #fff;
				font-weight: bold;
				border-radius: 5px;

			}

			.userdashboard .passreset{
				max-width: 600px;
			}


			.userdashboard .passreset label{
				font-size: 15px;
			}

			.userdashboard .passreset input{

				border-radius: 0px;
				border:none;
				border:1px solid #e8e8e8;
				height: 40px;

			}
			.userdashboard .passreset input:focus{
				box-shadow: none;
				border-color: #e8e8e8;
			}


			.userdashboard .passreset textarea{
				border-radius: 0px;
				border:none;
				border:1px solid #e8e8e8;
			}

			.userdashboard .passreset textarea:focus{
				box-shadow: none;
				border-color: #e8e8e8;
			}

			.dataTables_length label{
				font-size: 15px!important;
			}


			.dataTables_length select{
				padding: 5px 10px;
				border: none;
				border: 1px solid #e1e1e1;
			}


			.dataTables_length select:focus{
				border: 1px solid #e1e1e1;
				outline: none;
			}




			.dataTables_filter label{
				font-size: 15px!important;
			}

			.dataTables_filter input{
				padding: 5px 10px;
				border: none;
				border: 1px solid #e1e1e1;
			}

			.dataTables_filter input:focus{
				border: 1px solid #e1e1e1;
				outline: none;
			}

			table.dataTable tbody th, table.dataTable tbody td {
				padding: 12px 10px!important;
			}

			.orderstatus{
				color: #f1f1f1;
				padding: 3px 12px;
				border-radius: 20px;
				font-size: 13px;
			}


			.orderstatuss{
				color: #f1f1f1;
				padding: 3px 12px;
				border-radius: 20px;
				background-color:#DF4223;

			}

			.orderstatuss a{
				text-decoration:none;
			}



		</style>




		@endsection