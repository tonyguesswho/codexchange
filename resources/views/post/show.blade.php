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
<center><h3><b>{{$post->topic}}</b></h3></center>

<center><p>{{$post->description}}</p></center>
@if(!Auth::check())
<center><button type="button" class="btn btn-default but"><a href="/login">APPLY</a></button>
@elseif(Auth::check())<center>
<center><a href="/apply/{{$post->id}}"><button type="button" class="btn btn-default but">APPLY</button></a><center>
@endif
<div style="height: 10px;">
	
</div>
</div>
<div style="height:115px;">
 	
 </div>
@endsection