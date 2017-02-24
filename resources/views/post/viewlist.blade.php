@extends('structure')

@section('content')
    <nav class="navbar navbar-inverse">
                  <div class="container">
                    <div class="navbar-header">
                     <span> LIST OF APPLICANTS </span>
                    </div>
                  </div>
                </nav>

<div class="container" style="padding: 50px;">
<table class="container table-bordered table-responsive">
<thead>
     <tr style="height: 40px;">
         <th><b>NAME</b></th>
         <th><b>EMAIL</b></th>
                                                                
    </tr>
</thead>
<tbody>
@foreach ($views as $view )
    <tr style="height: 40px;">
        <td>{{$view->user->name}}</td>
        <td>{{$view->user->email}}</td>                                                           
    </tr>
@endforeach
</tbody> 
</table>

<div style="height: 50px;">
    <div class="text-center">
        {{$views->links()}}
    </div>
</div>
</div>
@endsection