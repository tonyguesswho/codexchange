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
						<center>
							<form action="/update/{{$posts->id}}" method="POST" role="form" class="tregform">
							{{csrf_field()}}
									<label for="">TOPIC</label>
									<input type="text" class="form-control put" id="" placeholder="" name="topic" value="{{ old('topic', $posts->topic) }}">
									<label for="">CATEGORY</label>
									<select name="category" id="input" class="form-control put" required="required">
										<option >{{ old('category', $posts->category) }}</option>
										<option value="php">php</option>
										<option value="html">html</option>
										<option value="css">css</option>
										<option value="javascritp">javascript</option>
										<option value="bootstrap">bootstrap</option>
										<option value="java">java</option>
										<option value="c++">c++</option>
									</select>
									<label for="">COUNTRIES</label>
									<select id="country" name="country" class="form-control put">
										<option >{{ old('category', $posts->country) }}</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Kenya">Kenya</option>
										<option value="Ghana">Ghana</option>
										<option value="Southafrica">Southafrica</option>
										<option value="Togo">Togo</option>
										
									</select>
									<label for="">STATES</label>
									<select name="state" id="state" class="form-control put">
										<option >{{ old('category', $posts->state) }}</option>
										<option value="Abuja">Abuja</option>
										<option value="Abia">Abia</option>
										<option value="Adamawa">Adamawa</option>
										<option value="Akwaibom">Akwaibom</option>
										<option value="Lagos">Lagos</option>
									</select>
									<label for="">VENUE</label>
									<input type="text" name="venue" id="input" class="form-control put" value="{{ old('category', $posts->venue) }}" required="required">
									<label for="">DATE</label>
									<input type="date" name="session_date" id="input" class="form-control put" value="{{ old('category', $posts->session_date) }}" required="required" title="">
									<label for="">TIME</label>
									<input type="time" name="session_time" id="input" class="form-control put" value="{{ old('category', $posts->session_time) }}" required="required" title="">

									<label for="">GENDER</label>
									<div class="radio">
									
										<label>
											<input type="radio" name="gender" id="input" value="{{ old('category', $posts->gender) }}" class="male">
											Male
										</label>
										<label>
											<input type="radio" name="gender" id="input" value="{{ old('category', $posts->gender) }}" class="female">
											Female
										</label>
										<label>
											<input type="radio" name="gender" id="input" value="{{ old('category', $posts->gender) }}" class="Both">
											Both
										</label>
									</div>
											<label for="">NUMBER OF APLLICANTS</label>
									<input type="number" name="applicants" id="input" class="form-control put" value="{{ old('category', $posts->applicants) }}" required="required">
											<label for="">FULL DESCRIPTION</label>
									<textarea name="description" id="inputTextarea" class="form-control" rows="3" required="required" cols="50" rows="10">{{ old('category', $posts->description) }}</textarea>
					
								<button type="submit" class="btn btn-primary but" name="submit">Submit</button>
							</form>
						 </center>
						</div>
					</div>
				</div>
		

@endsection