@extends('structure')

@section('content')
<nav class="navbar navbar-inverse">
                  <div class="container">
                    <div class="navbar-header">
                     <span> COURSE TO TEACH</span>
                    </div>
                  </div>
                </nav>

<div style="height:60px;">
 	
 </div>
  <div class="container">
     <table class="table table-hover table-bordered">
         <thead>
             <tr>
                 <th>SESSIONS TO TEACH</th>
                 <th>DATE</th>
                 <th>TIME</th>
                <th>VENUE</th>
                <th>EDIT</th>
                <th>APPLICANTS</th>
             </tr>
         </thead>
         <tbody>
        
             @foreach($teach as $teachs)
             <tr>
                 <td>{{$teachs->topic}}</td>
                 <td>{{$teachs->session_date}}</td>
                 <td>{{$teachs->session_time}}</td>
                 <td>{{$teachs->venue}}</td>
       			<td><a href="/dashboard/edit/{{$teachs->id}}" class="glyphicon-pencil"></a></td>
                 <td><a href="/dashboard/course/{{$teachs->id}}">VIEW</a></td>
             </tr>
         @endforeach
         </tbody> 
     </table>
 </div>

	<div class="text-center">
		{{$teach->links()}}
	</div>


 <div style="height:165px;">
 	
 </div>
 @endsection