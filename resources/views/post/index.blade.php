@extends('structure')

@section('content')

<!--slider-->
				<div class="carou_slider">
				
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<div class="over_lay col-md-12 col-sm-12 col-xs-12 cd text-center">
						<div class="inner container-fluid">
							<div id="text">
								<h1 class="text">LEARN. CODE. DEVELOP</h1>
								<h2 class="text">Let's Code Together</h2>
							</div>
							<div id="slider_div">
								<form method="GET" action="/search" id="slider_search">

								<span style="display: none;"> {Form::open(['method'=>'GET', 'url'=>'/search', 'role' =>'search'])} 
								
								</span>
									<input type="search" name="search" id="s_input" class="form-control control" placeholder="Search sessions by Key Words" title="">
									 <select name="search" id="input" class="form-control control" type="search">
										<option value="">Select Location</option>
										<option value="Abuja">Abuja</option>
										<option value="Abia">Abia</option>
										<option value="Adamawa">Adamawa</option>
										<option value="Akwa Ibom">Akwa Ibom</option>
										<option value="Anambra">Anambra</option>
										<option value="Bauchi">Bauchi</option>
										<option value="Bayelsa">Bayelsa</option>
										<option value="Benue">Benue</option>
										<option value="Borno">Borno</option>
										<option value="Cross River">Cross River</option>
										<option value="Delta">Delta</option>
										<option value="Ebonyi">Ebonyi</option>
										<option value="Edo">Edo</option>
										<option value="Ekiti">Ekiti</option>
										<option value="Enugu">Enugu</option>
										<option value="Gombe">Gombe</option>
										<option value="Imo">Imo</option>
										<option value="Jigawa">Jigawa</option>
										<option value="Kaduna">Kaduna</option>
										<option value="Kano">Kano</option>
										<option value="Katsina">Katsina</option>
										<option value="Kebbi">Kebbi</option>
										<option value="Kogi">Kogi</option>
										<option value="Kwara">Kwara</option>
										<option value="Lagos">Lagos</option>
										<option value="Nasarawa">Nasarawa</option>
										<option value="Niger">Niger</option>
										<option value="Ogun">Ogun</option>
										<option value="Ondo">Ondo</option>
										<option value="Osun">Osun</option>
										<option value="Oyo">Oyo</option>
										<option value="Pleatu">Pleatu</option>
										<option value="Sokoto">Sokoto</option>
										<option value="Taraba">Taraba</option>
										<option value="Yobe">Yobe</option>
										<option value="Zamfara">Zamfara</option>
									</select> 
									<a href="/search"><button type="submit" class="btn btn-default but">SUBMIT</button></a>
									 <span style="display: none;"> {Form::close()}</span>
								</form> 
							</div>
						</div>	
					</div>
					
				
					<div class="carousel-inner">
						<div class="item">
							<img src="img/red.jpg">
							
						</div>
						<div class="item">
							<img src="img/slider1.jpg">
							
						</div>
						<div class="item active">
							<img src="img/black.jpeg">
						</div>
					</div>
				</div>
				</div>

				

			<!--event-->
			<div id="event-div" class="text-center container-fluid">
			
				<h2 id="event">SESSIONS</h2>
					<div class="row grid-row text-center">
						<div class="thumbnail col-xs-6 col-sm-6 col-md-4 col-lg- grid">
						<a href="">
							<img src="img/html.png">
								<div class="grid-div">
								<p class="grid-text">&lt; html /&gt;</p>
							</div>
						</a>
						</div>
						<div class="thumbnail col-xs-6 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/css.jpeg">
								<div class="grid-div">
									<p class="grid-text">{css}</p>
								
								</div>
							</a>
						</div>
						<div class="thumbnail col-xs-6 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/php.jpeg">
								<div class="grid-div">
									<p class="grid-text">&lt;? php ?&gt;</p>
								
								</div>
							</a>
						</div>
					
					
						<div class="thumbnail col-xs-6 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/javasc.jpeg">
								<div class="grid-div">
									<p class="grid-text">Javascript</p>
								</div>
							</a>
						</div>
						<div class="thumbnail col-xs-6 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/c.jpeg">
								<div class="grid-div">
									<p class="grid-text">c++</p>
								</div>
							</a>
						</div>
						<div class="thumbnail col-xs-6 col-sm-6 col-md-4 col-lg- grid">
							<a href="#"><img src="img/java.png">
								<div class="grid-div">
									<p class="grid-text">Java</p>
								</div>
								</a>
						</div>

					</div>
					<a href="/session"><button type="button" class="btn btn-default but">FIND SESSION</button></a>
				</div>


				<div class="how-it-works container-fluid">
					<div class="row h_i_w">
						<h3>HOW CODEXCHANGE WORKS</h3>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="h_first">
									<img src="img/map.png">
									<h3>SEARCH FOR SESSIONS</h3>
									<h4>Find event around you, apply  and learn a skill</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="h_first">
									<img src="img/student.png">
									<h3>CREATE AN EVENT</h3>
									<h4>Create an Event and share your skill friends</h4>
								</div>
							</div>	
					</div>
				</div>
				
				<div class="background img-respons">
					<div class="over_lay"></div>
				</div>


				<div id="latest-events" class="container-fluid">
					<h3>LATEST SESSIONS</h3>
					<div class="row">
						<div  col-md-12 col-sm-12 col-xs-12 L-events" id="l_events">
							@foreach( $posts as $post)
								<div class="col-md-6 thumbnail L-events">
										<h4><a href="/teach/{{$post->id}}" data-toggle="modal">{{$post->topic}}</a></h4>
										<h5><b>{{$post->user->name}} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp {{$post->created_at->diffForHumans()}}</b></h5>
										<h5>VENUE: {{$post->venue}} {{$post->state}} {{$post->country}}</h5>
										<h5>DATE: {{$post->session_date}} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp TIME: {{$post->session_time}}</h5>
										@if(!Auth::check())
										<a href="/login"><button type="button" class="btn btn-default but">APPLY</button></a>
										@elseif(Auth::check())
										<a href="/apply/{{$post->id}}"><button type="button" class="btn btn-default but">APPLY</button></a>
										@endif
									<span>
										<ul>
											<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
											<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
										</ul>
									</span>
								</div>
								@endforeach
									

						
									
					</div>
				</div>
			</div>	

			@endsection