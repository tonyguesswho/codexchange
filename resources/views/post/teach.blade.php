@extends('structure')

@section('content')
<nav class="navbar navbar-inverse">
				  <div class="container">
				    <div class="navbar-header">
				     <span> TEACH A SKILL</span>
				     </div>
				     <div class="navbar-header pull-right">
				     
				     </div>
				    <form class="navbar-form navbar-left pull-right">
				      <div class="input-group">
				        <input type="text" class="form-control" placeholder="Search">
				        <div class="input-group-btn">
				          <button class="btn btn-default" type="submit">
				            <i class="glyphicon glyphicon-search"></i>
				          </button>
				        </div>
				      </div>
				    </form>
				  </div>
				</nav>
				@include('layout.error')
				<div class="container-fluid reg-body">
					<div class="row">
						<div class="col-md-12">
							<form action="/post" method="POST" role="form" class="tregform" name="tregform">
							{{csrf_field()}}
								
									<div class="form-group l-form">
									<label for="">TOPIC</label>
									<input type="text" class="form-control put" id="" placeholder="" name="topic">
									<label for="">CATEGORY</label>
									<select name="category" id="input" class="form-control put" required="required">
										<option >Select a Category</option>
										<option value="Php">Php</option>
										<option value="Html">Html</option>
										<option value="Css">Css</option>
										<option value="Javascritp">Javascript</option>
										<option value="Bootstrap">Bootstrap</option>
										<option value="Java">Java</option>
										<option value="C++">C++</option>
									</select>
									<label for="">COUNTRIES</label>
									<select id="country" name="country" class="form-control put">
										<option >Select a Country</option>
										<option value="Nigeria">Nigeria</option>	
									</select>
									<label for="">STATES</label>
									<select name="state" id="state" class="form-control put">
										<option >Select a state</option>
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
									<label for="">VENUE</label>
									<input type="text" name="venue" id="input" class="form-control put" value="" required="required">
									<label for="">DATE</label>
									<input type="date" name="session_date" id="input" class="form-control put" onload="validate();" value="" required="required" title=""><span id="timeerror" style="color: red;"> </span><br/>
									<label for="">TIME</label>
									<input type="time" name="session_time" id="input" class="form-control put" value="" required="required" title="">
									
									<label for="">GENDER</label>
									<div class="radio">
									
										<label>
											<input type="radio" name="gender" id="input" value="Male" class="male">
											Male
										</label>
										<label>
											<input type="radio" name="gender" id="input" value="Female" class="female">
											Female
										</label>
										<label>
											<input type="radio" name="gender" id="input" value="All GENDER" class="Both">
											Both
										</label>
									</div>
											<label for="">NUMBER OF APLLICANTS</label>
									<input type="number" name="applicants" id="input" class="form-control put" value="" required="required">
											<label for="">FULL DESCRIPTION</label>
									<textarea name="description" id="inputTextarea" class="form-control" rows="3" required="required" cols="50" rows="10"></textarea>
							
								
							
								
							
								<center><button type="submit" class="btn btn-primary but" name="submit">Submit</button></center>
								</div>
							</form>
							
						</div>
					</div>
				</div>
		

@endsection