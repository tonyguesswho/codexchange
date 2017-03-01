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
                                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ACTIVE TEACHERS</a></li>
                                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">SESSIONS CLOSE TO YOU</a></li>
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
                                                <li role="presentation">
                                                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">PREVIOUS</a>
                                                </li>

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
                                                               <td><a href="{{$post->id}}" class="glyphicon-trash"></a></td>

                                                            </tr>
                                            			@endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                    <div class="text-center">
                        {{$posts->links()}}
                    </div>

                                                <div role="tabpanel" class="tab-pane" id="tab">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SESSIONS ATTENDED</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> 
                                   </div>


                                   <div role="tabpanel" class="tab-pane" id="teach">
                                    <div class="col-md-12">
                                      <!-- Nav tabs -->
                                         <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active in">
                                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">CURRENT</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">PREVIOUS</a>
                                                </li>
                                         </ul>
                                       
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SESSIONS TO TEACH</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                <th>EDIT</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                       
                                                            
                                                        </tbody> 
                                                    </table>
                                                </div>
                                                   
                                        
                                                <div role="tabpanel" class="tab-pane" id="">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SESSIONS ATTENDED</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
        <div style="height: 50px;">
                    
                </div>   
@endsection
