			<header id="head">
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="/"><img src="img/codexchange1.png"></a>
							</div>
					
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse nav_bar">
								
								
								<ul class="nav navbar-nav navbar-right">
									<li>
									@if(!Auth::check())
										<a href="/session"><b>{{'SESSION'}}</b></a>
									@elseif(Auth::check())
										<a href="/session"><b>{{'SESSION'}}</b></a>	
									@endif
									</li>
									<li>
										@if(!Auth::check())
										<a href="/login"><b>{{'TEACH'}}</b></a>
										@elseif(Auth::check())
										<a href="/teach"><b>{{'TEACH'}}</b></a>
										@endif
									</li>
									
									<li>
										@if(!Auth::check())
										
										@elseif(Auth::check())
										<a href="/dashboard"><b>{{'DASHBOARD'}}</b></a>
										@endif
									</li>
									<li>
										@if(!Auth::check())
										<a href="/login"><b>{{'LOG'.'IN'}}</b></a>
										@elseif(Auth::check())
										<a href="/logout"><b>{{'LOG'.'OUT'}}</b></a>
										@endif
									</li>
									<li>
										@if(!Auth::check())
										<a href="/register"><b>{{'SIGN'.'UP'}}</b></a>
										@elseif(Auth::check())
										<a href="#"><b>{{Auth::user()->username}}</b></a>
										@endif
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</header>