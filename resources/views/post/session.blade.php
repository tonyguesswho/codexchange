@extends('structure')

@section('content')


				<nav class="navbar navbar-inverse">
				  <div class="container">
				    <div class="navbar-header">
				     <span> SESSIONS</span>
				    </div>
				    <form class="navbar-form navbar-left pull-right">

				   	 
				   	<span style="display: none;"> {Form::open(['method'=>'GET', 'url'=>'/session', 'role' =>'search'])} </span>
				   	 
				      <div class="input-group">
				        <input type="text" class="form-control" placeholder="Search" name="search">
				        <div class="input-group-btn">
				          <button class="btn btn-default" type="submit">
				            <i class="glyphicon glyphicon-search"></i>
				          </button>
				        </div>
				      </div>
				      	
				      <span style="display: none;"> {Form::close()}</span>
				    </form>
				  </div>
				</nav>

				<!--events-->

				@if (session('status'))
				<center>
    				<div class="alert alert-success">
      					<b>{{ session('status') }}</b>
    				</div>
    			</center>
				@endif
				@include('layout.error')
				<div class="container-fluid events">
					<div class="row">
						<div class="col-md-3">
							<div class="row c-events">
								<div class="col-md-12 thumbnail">
									<ul class="nav nav-tabs nav-stacked text-center" role="tablist">
						                <li role="presentation" class="active"><a href="#allevents" aria-controls="allevents" role="tab" data-toggle="tab">ALL SESSIONS</a></li>
						                <li role="presentation"><a href="" aria-controls="" role="tab" data-toggle="tab">TRENDING</a></li>
						                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ACTIVE TEACHERS</a></li>
						                
						            </ul>
												
								</div>
								
							</div>
							
						</div>
						<div class="col-md-9">
							<div class="row tab-content">
								<div role="tabpanel" class="tab-pane fade active in" id="allevents">
								@foreach( $posts as $post)

								<div class="col-md-12 thumbnail L-events">
								
										<h4><a href="/teach/{{$post->id}}">{{$post->topic}}</a></h4>
										<h5><b>{{$post->user->name}} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp {{$post->created_at->diffForHumans()}}</b></h5>
										<h5>VENUE: {{$post->venue}} {{$post->state}} {{$post->country}}</h5>
										<h5>DATE: {{$post->session_date}} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp TIME: {{$post->session_time}}</h5>
										
										<a href="/apply/{{$post->id}}"><button type="button" class="btn btn-default but">APPLY</button></a>
										
									<span>
										<ul>
											<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
											<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
										</ul>
									</span>
								</div>
								@endforeach
									
								
						  	<div role="tabpanel" class="tab-pane fade" id="messages">
			                   
			                </div>
						</div>
					</div>		
				</div>

					<div class="text-center">
						{{$posts->links()}}
					</div>
				</div>

						


@endsection