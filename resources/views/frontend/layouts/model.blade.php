<!DOCTYPE html>
	<html>
	<head>
		<title>Product Modal</title>
	</head>

	<script>
		function validateForm() {
			var pw1 = document.getElementById("shatu").value;
			var pw2 = document.getElementById("dasdas").value;
			if(pw1 == ""){
				document.getElementById("message1").innerHTML = "**Fill the password please!";
				return false;
			}
			if(pw2 == "") {
				document.getElementById("message2").innerHTML = "**Enter the comfirm password please!";
				return false;
			} 
			if(pw1.length < 8){
				document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
				return false;
			}
			if(pw1.length > 15){
				document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
				return false;
			}
			if(pw1 != pw2){
				document.getElementById("message2").innerHTML = "**Passwords are not same";
				return false;
			}  
		}
	</script>

	<body>

		<div class="modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Login || Register</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">

						<div class="col-lg-12 col-12 mt-4">
							<div class="container-fluid">
								<ul class="nav nav-pills nav-justified " id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#Sellers" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Buyers" role="tab" aria-controls="pills-profile" aria-selected="false">Register</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="tab-content" id="pills-tabContent">

							<div class="tab-pane fade show active" id="Sellers" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="col-lg-12 col-md-12 col-sm-10 col-12 pt-4 pb-5">
									<div class="container-fluid">
										<div class="col-sm-12 col-12 p-4 bg-white loginback">
											<h5 class="text-uppercase">Login your Account</h5><hr>
											<form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
												@csrf
												<div class="row p-2">
													<div class="form-group mform col-sm-12">
														<label>Email/Mobile</label>
														<input id="email" type="email" class="form-control textfill @error('email') is-invalid @enderror" name="email" placeholder="Email/Mobile" value="{{ old('email') }}" required autocomplete="email" autofocus>
														@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>

													<div class="form-group mform col-sm-12">
														<label>Password</label>
														<input type="password" id="password" class="form-control textfill @error('password') is-invalid @enderror" name="password" placeholder="Password" required="" >

														<i class="far fa-eye" id="togglePassword"  style="cursor: pointer;margin-top:12px;"></i>

														@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
													<div class="form-group mform col-sm-12">
														<div class="col-md-6 offset-md-4">
															<div class="form-check">
																<input class="form-check-input" type="checkbox" name="remember" onclick="Function()"> 
																<label class="form-check-label" for="remember">Remember Me </label>
															</div>
														</div>
													</div>
													<div class="form-group mform col-sm-12"> 
														<a href="#" style="text-align:right">Forgot Account ?</a>
													</div>
													<div class="form-group mform col-sm-12">
														<center>
															<input type="submit" id="btn" value="LOGIN" class="form-control logbutton w-50" style="background:#0a0a0a;">
														</center>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="Buyers" role="tabpanel" aria-labelledby="pills-profile-tab">
								<form method="post" action="{{ route('register') }}" onsubmit ="return validateForm()">
									@csrf
									<div class="col-lg-12 col-12 pt-4 pb-5">
										<div class="container-fluid">
											<div class="col-sm-12 col-12 p-4 bg-white loginback">
												<h5 class="text-uppercase">User Registation</h5><hr>
												<div class="row p-2">

													<div class="form-group mform col-sm-12">
														<label>Name</label>
														<input type="text" class="form-control textfill" name="name" placeholder="Name" required="">
													</div>

													<div class="form-group mform col-sm-12">
														<label>Email</label>
														<input type="email" class="form-control textfill" name="email" placeholder="Email">
													</div>

													<div class="form-group mform col-sm-12">
														<label>Phone</label>
														<input type="text" class="form-control textfill" name="phone" id="phone" placeholder="Mobile" value="" required="">
													</div>

													<div class="form-group mform col-sm-6">
														<label>Password</label>
														<input type="Password" class="form-control textfill"  name="password" id="shatu" placeholder="Password" value="" onkeyup="checkpassword()">
															<small>
																<input type="checkbox" class="ml-3" onclick="passFunction()">
									       <i style="color:#95A5A6;">Show Password</i>
								       </small>
														 <span id = "message1" style="color:red"></span>

													</div>

													<div class="form-group mform col-sm-6">
														<label>Confirm Password</label>
														<input type="Password"  class="form-control textfill" name="confirm_password" id="dasdas" placeholder="Confirm Password"  value="" >
															<small>
																<input type="checkbox"  class="ml-3" onclick="MyFunction()">
									     	<i style="color:#95A5A6;">Show confirm Password</i>
									     	</small>
														<span id="message2" style="color:red"></span>
													</div>

													<div class="form-group mform col-sm-12">
														<label>Address</label>
														<textarea class="form-control textfill2" rows="3" placeholder="Address" name="address" ></textarea>
													</div>

													<div class="form-group mform col-sm-12">
														<input type="submit" id="submit" value="SIGN UP" class="d-block form-control logbutton w-50" style="background:#0a0a0a;couser:pointer">
													</div>

												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>

	</body>
	</html>