@php
$setting = DB::table('setting_information')->first();
$contenttable = DB::table('contuct')->first();


@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<title> {{ $setting->title }} </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@500&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&amp;display=swap" rel="stylesheet">
	
	<!-----favicon----->
	<link rel="icon" type="image/x-icon" href="{{ asset($setting->favicon) }}">
	<!-----fontawesome icon----->
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/styles/bootstrap4/bootstrap.min.css">
	<link href="{{asset('fontlink')}}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<!-----fa fa icon----->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<!-----slider--------->
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/plugins/slick-1.8.0/slick.css">
	<!-----index page link------->
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/styles/contact_responsive.css">
	<!------data table-------->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
	
	<!-----single view page------>
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/product_view_link/style.css">
	<link media="all" type="text/css" rel="stylesheet" href="{{asset('fontlink')}}/product_view_link/select2.min.css"> 
	<!--------cart------>
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/card-file/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/card-file/style.css">
	<!-----toster------->
	<link rel="stylesheet" type="text/css" href="{{asset('fontlink')}}/styles/toast.css">

	<script type="text/javascript" src="{{asset('fontlink')}}/product_view_link/jquery-3.3.1.min.js"></script>
	<script src="{{asset('fontlink')}}/product_view_link/jquery.js"></script>
	<script type="text/javascript" src="{{asset('fontlink')}}/product_view_link/xzoom.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>

<body>

	<div class="super_container" style="display:initial;">

  @include('frontend.layouts.header')

		@yield('homecontent')

		@include('frontend.layouts.footer')

	</div>

	@include('frontend.layouts.model')

	

	<!---------card desing---------->

	<!------show icen------------->
	<center>
		<div class="addtocart" id="cat_box">
			<a id="myBtns">
				<img src="{{ asset('fontlink')}}/card-file/shopper.svg" class="img-fluid">
				<br>
				<span style="color: #fff;"><span id="cartqunt">{{ Cart::Count() }}</span> ITEMS</span>
				<br>
				<span><span id="cartamount">{{ Cart::subtotal() }}</span> TK</span>
			</a>
		</div>
	</center>

	<!-----card defult hide div----------->
	<div  id="cat_div"  class="card_div">

		<div class="card-header bg-light" style="">
			<div class="row">
				<div class="col-sm-4 col-4">
					My Cart
				</div>
				<div class="col-sm-4 col-4">
					<a href="{{ route('cler') }}"  class="btn text-center p-0" style="color:#000;">
						All Cler
					</a>
				</div>
				<div class="col-sm-4 col-4">
					<span id="cat_view" class="fa fa-close float-right"></span>
				</div>
			</div>
		</div>




		<!------ product show -------->
		<div class="card-body p-0" id="cardbody">
			<div id="cartshow">
				@php
				$card=Cart::content();
				@endphp

				@if(isset($card))
				@foreach($card as $cartdata)

				<div class="col-sm-12 col-12 p-0 card-product-div">
					<div class="row">
						<div class="col-sm-3 col-3">
							<center>
								<img src="{{ asset($cartdata->options->product_image) }}" class="img-fluid card-img">
							</center>
						</div>

						<div class="col-sm-7 col-7">
							<span class="card-text">{{ $cartdata->name }}</span><br>
							<span class="card-text-1">{{ $cartdata->price }} &nbsp;* {{ $cartdata->qty }}
								@php
									$productprice=$cartdata->price;
									$qty=$cartdata->qty;
									$product_T_price=$productprice*$qty;
								@endphp
								<span>=&nbsp;{{ $product_T_price }} TK</span> </span>
							</div>
							<div class="col-sm-2 col-2">
								<span>
									<a href="{{ route('remove',$cartdata->rowId) }}">
										<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="trash">
											<polyline fill="none" stroke="#E55B48" points="6.5 3 6.5 1.5 13.5 1.5 13.5 3"></polyline>
											<polyline fill="none" stroke="#E55B48" points="4.5 4 4.5 18.5 15.5 18.5 15.5 4"></polyline>
											<rect x="8" y="7" width="1" height="9"  stroke="#E55B48"></rect>
											<rect x="11" y="7" width="1" height="9" stroke="#E55B48" ></rect>
											<rect x="2" y="3" width="16" height="1" stroke="#E55B48" ></rect>
										</svg>
									</a>
								</span>
							</div>
						</div>
					</div>

					@endforeach
					@endif

				</div>
			</div>


			<div class="col-sm-12 col-12 p-0 card-fotter" id="card_bottom">
				<div class="card-footer bg-dark mt-2">
					<div class="col-sm-12 col-12">
						<center>
							<span class="total">TOTAL =&nbsp;<span id="cartprice">{{ Cart::subtotal() }}</span> TK</span>
						</center>
					</div>
				</div>

				<div class="card-footer"  id="card_bottom2">
					<div class="col-sm-12 col-12">
						<center>
							@if( Auth::check())
							<a href="{{ route('chack_out') }}" class="orders">
							CHECKOUT</a>
							@else
							<a href="" class="orders"  data-toggle="modal" data-target="#staticBackdrop" >
							CHECKOUT</a>
							@endif
						</center>
					</div>
				</div>
			</div>

		</div>



			<!-------Show password------>
 <script type="text/javascript"> 
  function passFunction() {
   var x = document.getElementById("shatu");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>

<!---------Show comfirm password------->
 <script type="text/javascript"> 
  function MyFunction() {
   var x = document.getElementById("dasdas");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>

	<!-------scrollbar css------->	
	<style type="text/css">
		::-webkit-scrollbar {
			width: 4px;
			height:5px;
		}
		::-webkit-scrollbar-track {
			background:#fff; 
		}
		::-webkit-scrollbar-thumb {
			background:gray; 
		}
		::-webkit-scrollbar-thumb:hover {
			background:#D7DBDD; 
		}
	</style>
	<!-------cart css------->	
	<style type="text/css">
		.catagory-hide{
			display: none;
		}
	</style>




		
	<!-----user login password show------->
	<script type="text/javascript"> 
		function Function() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

	<!-----add To card hide and Show script--------->
	<script type="text/javascript">
		cart = document.querySelector("#cat_box");
		cartPlus = document.querySelector("#cat_div");
		cartvi = document.querySelector("#cat_view");

		cart.addEventListener('click', function(){
			cart.classList.add('class');
			cart.classList.remove('class2');
			cartPlus.classList.add('class2');
			cartPlus.classList.remove('class');
		})
		cartvi.addEventListener('click', function(){
			cart.classList.add('class2');
			cart.classList.remove('class');
			cartPlus.classList.add('class');
			cartPlus.classList.remove('class2');
		})
	</script>

	<script src="{{asset('fontlink')}}/js/jquery-3.3.1.min.js"></script>
	<script src="{{asset('fontlink')}}/styles/bootstrap4/popper.js"></script>
	<script src="{{asset('fontlink')}}/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="{{asset('fontlink')}}/plugins/greensock/TweenMax.min.js"></script>
	<script src="{{asset('fontlink')}}/plugins/greensock/TimelineMax.min.js"></script>
	<script src="{{asset('fontlink')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="{{asset('fontlink')}}/plugins/greensock/animation.gsap.min.js"></script>
	<script src="{{asset('fontlink')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="{{asset('fontlink')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="{{asset('fontlink')}}/plugins/slick-1.8.0/slick.js"></script>
	<script src="{{asset('fontlink')}}/plugins/easing/easing.js"></script>
	<script src="{{asset('fontlink')}}/js/custom.js"></script>

	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable( {
				responsive: true,
				"order": [[ 0, "desc" ]],

			} );
		} );
	</script>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
		@if (Session::has('messege'))
		var type="{{ Session::get('alert-type', 'info') }}"
		switch(type){
			case 'info':
			toastr.options.positionClass = 'toast-top-right';
			toastr.info("{{ Session::get('messege') }}");
			break;
			case 'success':
			toastr.options.positionClass = 'toast-top-right';
			toastr.success("{{ Session::get('messege') }}");
			break;
			case 'warning':
			toastr.options.positionClass = 'toast-top-right';
			toastr.warning("{{ Session::get('messege') }}");
			break;
			case 'error':
			toastr.options.positionClass = 'toast-top-right';
			toastr.error("{{ Session::get('messege') }}");
			break;
		}
		@endif
	</script>


	<!-----auto dropdown menu------->
	<script type="text/javascript">
		var status = true;
		cat_menu_container=document.querySelector(".cat_menu_container");
		cat_menu_container.addEventListener("mouseover",function () {
			this.children[1].style.display='block';
		});
		cat_menu_container.addEventListener("mouseout",function () {
			this.children[1].style.display='none';
		});

		cat_menu_container.addEventListener("click",function () {
			if(this.children[1].style.display!='none'){
				this.children[1].style.display='none';
			}else{
				this.children[1].style.display='block';
			}
		})
		window.addEventListener("scroll",function () {
			if(window.scrollY>200){
				cat_menu_container.children[1].style.display='none';
			}
			else{
				cat_menu_container.children[1].style.display='block';
			}
		})
	</script>



	<style type="text/css">

			.use_reg{
				text-decoration:none;
			}
			.mform label{
				color: #414141;
				font-weight: normal;
				font-size: 15px;
			}

			.textfill{
				height: 50px;
				background-color: #fff;
				color: #414141;
				border-radius: 0px;
				transition: 0.9s;
				border:2px solid #f1f1f1;
				font-size: 15px;
				font-weight: normal;
			}

			.textfill:focus{
				box-shadow: none;
				border:2px solid #414141;
			}

			.textfill2{
				background-color: #fff;
				border-radius: 0px;
				border:2px solid #f1f1f1;
				font-size: 15px;
				color: #414141;
				transition: 0.9s;
			}

			.textfill2:focus{
				box-shadow: none;
				border:2px solid #585858;
			}

			.list-group .headlist{
				background: #585858;
				color: #fff;
				font-size: 22px;
				border-radius: 0px;
				border:none;
				line-height: 35px;
				text-transform: uppercase;
			}

			.loginback{
				box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.10) !important;
			}

			.logbutton{
				background-color: #dc3545;
				color: #fff;
				padding: 10px;
				border-radius: 0px;
				width: 50%;
				font-weight: bold;
				cursor: pointer;
				border:none;
			}

			.logbutton:focus{
				background-color: #dc3545;
				color: #fff;
				box-shadow: none;
				border:none;
			}

			.loginback h5{
				font-size: 20px;
				font-weight: bold;
				color: #585858;
			}

			.loginback a{
				text-decoration: none;
				color: gray;
				font-size: 13px;
				transition: 0.5s;
			}



			.loginback a:hover{
				text-decoration: none;
				color: #dc3545;
			}

			.nav .nav-link{
				font-size: 14px;
				color: #414141;
				transition: 0.4s;
				padding: 15px 30px;
				background: #fff;
				border: 1px solid #f1f1f1;
				border-radius: 0px;
				text-transform: uppercase;
			}

			.nav .nav-link:focus{
				color: #fff;
			}

			.nav .nav-link.active {
				color: #fff;
				background: #343a40;
			}



			.main_nav_content{
				height:80px;
			}
			.cat_menu_text{
				margin-left:0px;
			}
			#cat_burger{
				margin-left:20px;
				background-color:#CACFD2;
			}
			.main_nav_menu{
				width:100%;
			}
			#search_div{
				padding-top:20px;
				float:right;
			}

			.header_search_input{
				width:92%;
				background-color:#F4F4F4;
			}

			.custom_dropdown{
				display:disabled;
			}

			.menu_trigger{
				height:90px;
			}

			.menu_burger{
				height:90px;
			}

			.menu_trigger_text{
				margin-top:30px;
			}


			#menu_burger_inner{
				font-size:22px;
				line-height:10px;
				font-weight:400;
			}

			.footer{
				background-color:#111111;
				padding-top:8px;
				padding-bottom:0px;
			}

			.footer_contact_text{
				font-size:13px;
			}

			#map_frim{
				margin-top:10px;
				width:100%;
				max-height:270px;
				min-height:220px;

			}

			#buttom_footer{
				background-color:#CCCCCC;
			}


			.card_div
			{
				background-color:#FFFFFF;
				padding:0px;
				margin-top:0px;
				position: fixed;
				top:0px;
				right:-100%;
				z-index:1000;
				height:100vh;
				width:350px;
				box-shadow: -5px 0px 5px -1px rgba(0,0,0,0.44);
				-webkit-box-shadow: -5px 0px 5px -1px rgba(0,0,0,0.44);
				-moz-box-shadow: -5px 0px 5px -1px rgba(0,0,0,0.44);
				/*	overflow-y:scroll;*/
			}

			.card-header{
				color: #000;
				border-radius:0px;
				border:none;
				font-weight:600;
			}

			.card-body{
	/*	overflow-x:hidden; 
	overflow-y:scroll;*/
}
.card-product-div{
	border-bottom:1px solid lightgray;

}
.card-text
{
	font-size:13px;
}

.card-text-1{
	font-size:15px;
}

.card-text-1 span{
	color:#E55B48;
}

.card-img{
	padding:4px;
}

#card_bottom{
	bottom:0;
	position:absolute;
	width: 100%;
}
#card_bottom2
{
	background-color: #ff5500;
}
#card_bottom2 a{
	color:white
}


.class
{ animation: animate 1s forwards;
}
@keyframes animate 
{ 0%
	{ right: 0;
		} 100%
		{ right: -100%;
		}
	}
	.class2
	{ animation: animate2 1s forwards;
	}
	@keyframes animate2 
	{ 0%
		{ right: -100%;
			} 100%
			{ right: 0px;
			}
		}

		.foot_text{
			color:#FF8500;
			text-transform:uppercase;
			font-size:15px;
		}
		.P_TEXT{
			color:#fff ! important;
			margin-left:5px;
		}
		.footer_title
		{
			color:#fff;
			font-weight:600;
		}
		.footer_list li a 
		{
			color:#fff;
		}
		.footer_list li{
			padding:2px;
		}
	</style>


</body>
</html>

