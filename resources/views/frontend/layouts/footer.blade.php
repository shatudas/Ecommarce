  <!-- Subscribe div -->
		<div class="newsletter">
			<div class="container">
				<div class="row">

					<div class="col-12">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
							<div class="newsletter_title_container">
								<div class="newsletter_icon">
									<img src="{{asset('fontlink')}}/images/send.png" alt="">
								</div>
								<div class="newsletter_title">Sign up for Newsletter</div>
								<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
							</div>
							<div class="newsletter_content clearfix">
								<form action="#" class="newsletter_form">
									<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
									<button class="newsletter_button">Subscribe</button>
								</form>
								<div class="newsletter_unsubscribe_link">
									<a href="#">unsubscribe</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							
							<div class="logo_container">
								<div class="logo" >
									<a href="#">
										<img src="{{ asset($setting->setting_image) }}" class="img-fluid" alt="" style="height:80px;">
									</a>
								</div>
							</div>

							<br>
							<div class="footer_title text-white">Got Question? Call Us 24/7</div>
							<div class="footer_contact_text">
								<span class="foot_text">Phone</span><br>
								<p class="P_TEXT">{{$contenttable->phone}}</p>
								<span class="foot_text">Email</span><br>
								<p class="P_TEXT">{{$contenttable->email}}</p>
								<span class="foot_text">Address</span><br>
								<p class="P_TEXT text-white">{!! $contenttable->details !!}</p></span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 ">
						<div class="footer_column">
							<div class="footer_title">QUICK LINKS</div>
							<ul class="footer_list">
								<li><a href="{{route('about_us')}}">About Us</a></li>
								<li><a href="{{route('contact')}}">Contuct Us</a></li>
								<li><a href="{{route('FAQ_page')}}">FAQs</a></li>
								<li><a href="{{route('Term_condition')}}">Term & Condition</a></li>
								<li><a href="{{route('Privacy_Policy')}}">Privacy & Policy</a></li>
								<li><a href="{{route('how_to')}}">	How To Bay</a></li>
							</ul>

						</div>
					</div>


					<div class="col-lg-3">
						<div class="footer_column">
							<div class="footer_title">Customer Care</div>
							<ul class="footer_list">

								@if( Auth::check())
								<li><a href="{{route('userdashboard')}}">My Account</a></li>
								@else
								<li><a href="" data-toggle="modal" data-target="#staticBackdrop">My Account</a></li>
								@endif
								@if( Auth::check())
								<li><a href="{{route('userdashboard')}}">Order Tracking</a></li>
								@else
								<li><a href="" data-toggle="modal" data-target="#staticBackdrop">Order Tracking</a></li>
								@endif

								<li><a href="#">Wish List</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Returns / Exchange</a></li>
								<li><a href="#">Product Support</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="footer_column">

							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
									<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								</ul>
							</div>

							<div>
								<iframe src="{{ $contenttable->location }}" id="map_frim"></iframe>
							</div>

						</div>
					</div>

				</div>
			</div>
		</footer>

		<div class="py-3" id="buttom_footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<center>Copyright &copy; <?php echo date("Y"); ?> All rights reserved |  by <a href="#" target="_blank">
							<img src="{{ asset($setting->setting_image) }}" class="img-fluid" alt=""  style="width:70px; z-index:100;">
						</a></center>
					</div>
					<div class="col-lg-6 col-sm-6" style="background-color:#ccc;">
						<center>
							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="{{asset('fontlink')}}/images/logos_1.png" alt=""></a></li>
									<li><a href="#"><img src="{{asset('fontlink')}}/images/logos_2.png" alt=""></a></li>
									<li><a href="#"><img src="{{asset('fontlink')}}/images/logos_3.png" alt=""></a></li>
									<li><a href="#"><img src="{{asset('fontlink')}}/images/logos_4.png" alt=""></a></li>
								</ul>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>