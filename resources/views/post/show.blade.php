@extends('structure')
@section('content')
@if (session('status'))
	<center>
    	<div class="alert alert-success">
      		<b>{{ session('status') }}</b>
    	</div>
    </center>
@endif
<div style="height:20px;">
 	
 </div>
<div class="container">
<h3><b>{{$post->topic}}</b></h3>

<p>{{$post->description}}</p>
@if(!Auth::check())
<button type="button" class="btn btn-default but"><a href="/login">APPLY</a></button>
@elseif(Auth::check())
<a href="/apply/{{$post->id}}"><button type="button" class="btn btn-default but">APPLY</button></a>
@endif
<div style="height: 10px;">
	
</div>
</div>
<div style="height:115px;">
 	
 </div>
@endsection