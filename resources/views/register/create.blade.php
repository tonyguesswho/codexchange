@extends('structure')
@section('content')

		<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="container">
						<h3>SIGN UP</h3>
					</div>
				</nav>
@include('layout.error')
<div class="container-fluid text-center reg-body">
					<div class="row text-center">
						<form action="" method="POST" role="form" class="r-form text-center" name="myform" onsubmit="validate();">
						{{csrf_field()}}
							<div class="col-md-6 l-form">
								<div class="col-md-12">
									<input type="text" name="name" id="input" class="form-control" value="{{old('name')}}" required="required" placeholder="Fullname">

									<input type="text" name="username" id="input" class="form-control" value="{{old('username')}}" required="required" placeholder="username">

									<input type="email" name="email" id="input" class="form-control" value="{{old('email')}}" required="required" placeholder="Email">

									<input type="tel" name="phone" id="inputTel" class="form-control" value="{{old('phone')}}" required="required" placeholder="Phone Number" onkeypress="validatePhone();"><span id="phoneerror" style="color: red;"> </span><br/>

									<input type="password" name="password" id="input" class="form-control" required="required" placeholder="Password" onkeypress="validatePassword();"><span id="passworderror" style="color: red;"> </span><br/>

									<input type="password" name="password_confirmation" id="inputPassword" class="form-control" required="required" placeholder="Comfirm Password">
								
								<div class="checkbox">
									<label>
										<input type="checkbox" name="checkbox" value="" id="check">
										I agree to codexchange <a href="#">Terms</a> and <a href="#">Condition</a>
									</label>
								</div>
									<button type="submit" class="btn btn-primary but" name="Submit" disabled="disabled" id="submit">Submit</button>

								</div>
							</div>
						</form>

						<div class="col-md-6 regAlt">
							<div class="row">
								<div class="col-md-12">
									<h4><b> LOG IN WITH</b></h4>
								</div>
							</div>
							
							<div class="col-md-12 facebook">
									<a href="login/facebook"><button type="button" class="btn btn-default"><img src="img/facebook.png">Facebook</button></a>
									
							</div>

							<div class="col-md-12 twitter">
									<button type="button" class="btn btn-default"><img src="img/twitter.png">Twitter</button>
									
							</div>
						</div>

					</div>
				</div>


@endsection