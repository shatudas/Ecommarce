<header class="header" style="display: initial;">
			<!-------top header------>
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
						
							<div class="top_bar_contact_item">
								<div class="top_bar_icon">
									<img src="{{ asset('fontlink')}}/images/phone.png" alt="">
								</div>
								{{ $setting->phone }}
							</div>

							<div class="top_bar_contact_item">
								<div class="top_bar_icon">
									<img src="{{ asset('fontlink')}}/images/mail.png" alt="">
								</div>
								<a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
							</div>

							<div class="top_bar_content ml-auto">
								<div class="top_bar_user">
								

									
										@if( Auth::check())
										@if(auth()->user()->is_admin == 0)

										 <a href="{{route('userdashboard')}}"  style="text-decoration:none;">
												{{ Auth()->user()->name }}
											</a>

											@else
												<div class="user_icon">
											<img src="{{ asset('fontlink')}}/images/user.svg" alt="">
										</div>
									
									 <div>
										 <a data-toggle="modal" data-target="#staticBackdrop" style="text-decoration:none;" >Register</a>
								 	</div>


										@endif
									 @else

									 <div class="user_icon">
											<img src="{{ asset('fontlink')}}/images/user.svg" alt="">
										</div>
									
									 <div>
										 <a data-toggle="modal" data-target="#staticBackdrop" style="text-decoration:none;" >Register</a>
								 	</div>

		
									
										@endif

									<div><a href="{{ route('login') }}" target="_blank"> Sign in</a></div>
								</div>
							</div> 

						</div>
					</div>
				</div>		
			</div>

			<nav class="main_nav" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
				<div class="container-fluid"  >
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">
								<div class="cat_menu_container" style="z-index:1000;">

									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_menu_text">
											<a href="{{route('/')}}">
												<img src="{{ asset($setting->setting_image) }}" class="img-fluid" style="height:40px;" alt="">
											</a>
										</div>
										<div class="cat_burger d-none d-lg-inline-block" id="cat_burger" >
											<span></span><span></span><span></span>
										</div>
									</div>

									@php
									$item=DB::table('item_information')->orderBy('id','ASC')->where('status',1)->get();
									$category=DB::table('category_information')->where('status',1)->get();
									$subcategory=DB::table('subcategory_information')->where('status',1)->get();
									@endphp

									<ul class="cat_menu" style="padding-top:-10px !important;">
										<!-----main menu----->
										@if(isset($item))
										@foreach($item as $itemView)

										<li class="hassubs">
											<a href="{{ route('itemProduct',$itemView->id) }}">{{ $itemView->item_name }}<i class="fas fa-chevron-right"></i></a>
											<ul>
												<!----sub menu------>
												@if(isset($category))
												@foreach($category as $categoryView)
												@if($itemView->id == $categoryView->item_id)
												<li class="hassubs">
													<a href="{{ route('catProduct',$categoryView->id) }}">{{ $categoryView->category_name}}<i class="fas fa-chevron-right"></i></a>
													<ul>
														<!-----sub==Sub menu------->
														@if(isset($subcategory))
														@foreach($subcategory as $subcategoryView)
														@if($categoryView->id == $subcategoryView->category_id)
														<li class="hassubs">
															<a href="{{ route('SubcatProduct',$subcategoryView->id) }}">{{ $subcategoryView->subcategory_name }}<i class="fas fa-chevron-right"></i></a>
														</li>
														@endif
														@endforeach
														@endif
													</ul>
													<!-----sub menu------>
												</li>
												@endif
												@endforeach
												@endif
											</ul>
											<!-----sun menu------>
										</li>

										@endforeach
										@endif
									</ul>
								</div>



								<div class="main_nav_menu ml-auto">

									<div class="col-12">
										<div class="row">
										
											<div class="col-7" id="search_div">
												<div class="header_search">
													<div class="header_search_content">
														<div class="header_search_form_container">
															<form action="{{ route('search') }}" method="get" class="header_search_form clearfix">
																@csrf
																<input type="search" name="Prosearch" required="required" class="header_search_input" placeholder="Search for products..." >
																<div class="custom_dropdown" >
																	<div class="custom_dropdown_list">
																		<span class="custom_dropdown_placeholder clc"></span>

																		<ul class="custom_list clc">
																		</ul>
																	</div>
																</div>
																<button type="submit" class="header_search_button trans_300" value="Submit">
																	<img src="{{ asset('fontlink')}}/images/search.png" alt="">
																</button>
															</form>
														</div>
													</div>
												</div>
											</div>

											<div class="col-5" align="center">
												{{-- <ul class="standard_dropdown main_nav_dropdown" >
													<li><a href="{{ route('blog') }}">Offer<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="{{ route('contact') }}">Contact<i class="fas fa-chevron-down"></i></a></li>
													<li class="hassubs">
														<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
														<ul>
															<li><a href="{{ route('cart') }}">Cart<i class="fas fa-chevron-down"></i></a></li>
															<li><a href="{{ route('product') }}">Product<i class="fas fa-chevron-down"></i></a></li>
															<li><a href="{{ route('blog') }}">Blog<i class="fas fa-chevron-down"></i></a></li>
														</ul>
													</li>
												</ul> --}}
											</div>

										</div>
									</div>

								</div>

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">Menu</div>
											<div class="cat_burger menu_burger_inner " id="menu_burger_inner"> <i class="fa fa-bars"></i></div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</nav>


			<div class="page_menu">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="page_menu_content">
								<div class="page_menu_search">
									<form action="{{ route('search') }}" method="get" >
										@csrf
										<input type="search" name="Prosearch" required="required" class="page_menu_search_input" placeholder="Search for products...">
									</form>
								</div>
								<ul class="page_menu_nav">

									<li class="page_menu_item has-children">
										<a href="#">Offer</i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Contuct</i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Pages<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="{{ route('cart') }}">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{ route('product') }}">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{ route('blog') }}">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">future products<i class="fas fa-chevron-down"></i></a></li>	
										</ul>
									</li>
								</ul>

								<div class="menu_contact">
									<div class="menu_contact_item" style="width:25%;">
										<div class="menu_contact_icon">
											<i class="fa fa-user-circle-o"></i>
										</div>
										<a href="#">Register</a>
									</div>

									<div class="menu_contact_item">
										<div class="menu_contact_icon">
											<i class="fa fa-sign-in"></i>
										</div>
										<a href="{{ route('login') }}">Sign In</a>
									</div>
								</div>

								<div class="menu_contact">
									<div class="menu_contact_item">
										<div class="menu_contact_icon">
											<img src="{{ asset('fontlink')}}/images/phone_white.png" alt=""> {{ $setting->phone }}
										</div>
									</div>
									<div class="menu_contact_item">
										<div class="menu_contact_icon">
											<img src="{{ asset('fontlink')}}/images/mail_white.png" alt="">
										</div>
										<a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</header>