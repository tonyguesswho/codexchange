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
         <th><b><center>NAME</center></b></th>
         <th><b><center>EMAIL</center></b></th>
                                                                
    </tr>
</thead>
<tbody>
@foreach ($views as $view )
    <tr style="height: 40px;">
        <td><center>{{$view->user->name}}</center></td>
        <td><center>{{$view->user->email}}</center></td>                                                           
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