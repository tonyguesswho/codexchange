@extends('structure')

@section('content')
                <nav class="navbar navbar-inverse">
                  <div class="container">
                    <div class="navbar-header">
                     <span> DASHBOARD</span>
                    </div>
                  </div>
                </nav>
                @if (session('status'))
                <center>
                    <div class="alert alert-success">
                        <b>{{ session('status') }}</b>
                    </div>
                </center>
                @endif

                <div style="height: 50px;">
                    
                </div>

                    <div class="container-fluid dasdiv">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12 side_barlist thumbnail">
                                        <ul class="nav nav-tabs nav-stacked" role="tablist">
                                            <li role="presentation" class="active"><a href="#session" aria-controls="#session" role="tab" data-toggle="tab">SESSION</a></li>
                                            <li role="presentation"><a href="/dashboard/course">TEACH</a></li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-9 body_list">
                                <div class="row tab-content">
                                    
                                    <div role="tabpanel" class="tab-pane active in" id="session">
                                            <!-- Nav tabs -->
                                        <div class="col-md-12 ">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">CURRENT</a>
                                                </li>
                                                <!-- <li role="presentation">
                                                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">PREVIOUS</a>
                                                </li> -->

                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <table class="table table-hover table-bordered">
                                                        <thead>

                                                            <tr>
                                                                <th>SESSIONS APPLIED</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                <th>STATE</th>
                                                                <th>COUNTRY</th>
                                                                <th>DELETE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($posts as $post)


                                                            <tr>
                                                                <td>{{$post->post->topic}}</td>
                                                                <td>{{$post->post->session_date}}</td>
                                                                <td>{{$post->post->session_time}}</td>
                                                                <td>{{$post->post->venue}}</td>
                                                                <td>{{$post->post->state}}</td>
                                                                <td>{{$post->post->country}}</td>
                                                               <td><a class="btn btn-primary" data-toggle="modal" data-target='#modal-id-{{$post->id}}' class="glyphicon-trash"></a></td>

                                                            </tr>
                                                        <div class="text-center">
                                                            <div class="modal fade" id="modal-id-{{$post->id}}">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            Do you want to delete session?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                            <a href="{{$post->id}}"><button type="button" class="btn btn-primary">DELETE</button></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                        
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                    
                                            </div>
                                        </div> 
                                   </div>
                                   
                      <center>{{$posts->links()}}</center>  
                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
             
        <div style="height: 50px;">
                    
                </div>   
@endsection
