@extends('structure2')

@section('content')
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="container">
						<h3>LOG IN</h3>

					</div>
				</nav>
				@include('layout.error')

			<form action="" method="POST" role="form" class="text-center form-l">
					{{csrf_field()}}
					<div class="form-group l-form">
						<input type="email" name="email" id="inputEmail" class="form-control" value="{{old('email')}}" required="required" placeholder="Email">
						<input type="password" name="password" id="inputPassword" class="form-control" required="required" placeholder="Password">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary but" name="submit">LOG IN</button>
				</form>

				

				<div class="text-center l-text">
					<span id="span">
						<h4>OR</h4>
						<h3><b>LOG IN WITH</b></h3>
						<a href="login/facebook"><img src="img/facebook.png"></a>
						<a href=""><img src="img/twitter.png"></a>
					</span>
						
						<p><input type="checkbox" value="">
							Keep me signed in.
						</p>
						<p>
							<a data-toggle="modal" href='#modal-id'>forgot password?</a>.
						</p>
						<p>
							FIRST TIME HERE? <a href="/register">Create an Account</a>
						</p>
				</div>


				
				<div class="modal fade" id="modal-id">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title"><img src="img/codexchange1.png"></h4>
							</div>
							<div class="modal-body">
								<input type="email" name="email" id="inputEmail" class="form-control" value="" required="required" placeholder="Email">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">RETRIVE</button>
							</div>
						</div>
					</div>
				</div>
@endsection


