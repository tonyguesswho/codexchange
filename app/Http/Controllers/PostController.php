<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Chencha\Share\ShareFacade;
use Carbon;
use Mail;
use App\Mail\Reminder;
use App\Teachapply;
use App\User;
use App\Post;
use Auth;

class PostController extends Controller
{  
   

    public function index()
    {
        return view('post.index');
    }


    public function create()
    {
        return view('post.teach');
    }

    public function active_teacher()
    {   

      $posts = DB::table('posts')
              ->select('user_id', DB::raw('count(*) as total'))
              ->join('users', 'posts.user_id', '=', 'users.id')
              ->groupBy('user_id')
              ->get(); 
    
      return view('post.active', compact('posts'));
    }

    public function session()
    {
            $search = \Request::get('search');
            $posts = Post::where('topic','like', '%'.$search.'%' )
            ->orwhere('state','like', '%'.$search.'%')
            ->orderBy('session_date')
            ->latest()
            ->paginate(5);

        return view('post.session', compact('posts'));
           
     }


     public function search()
     {
            $search = \Request::get('search');
            $posts = Post::where('state','like', '%'.$search.'%' )
            ->orwhere('topic','like', '%'.$search.'%')
            ->latest()
            ->paginate(5);

        return view('post.session', compact('posts'));
     }



     public function latest()
     {
        $posts = Post::latest()->paginate(2);
        return view('post.index' , compact('posts'));
    }


    public function show($id)
    {
        
        $post = Post::findorFail($id);

        return view('post.show', compact('post'));
    }

     public function social()
    {
        return \Share::load('http://www.example.com', 'Link description')->services('facebook', 'twitter');
    }

    public function teach()
    { 
        $teach = Post::where('user_id', Auth::user()->id)->latest()->paginate(8); 
        
        return view('post.course', compact('teach'));
    }


    public function store()
    {
        $this->validate(request(), [
            'topic' => 'required',
            'category' => 'required',
            'country' => 'required',
            'state'  => 'required',
            'venue'  => 'required',
            'session_date' => 'required',
            'session_time' => 'required',
            'gender'  => 'required',
            'applicants' => 'required',
            'description'=> 'required'
            ]);
        $session_date = request('session_date');
        
        $today = \Carbon\Carbon::now();

            if($session_date < $today ){

                return back()->withErrors([
                    'message' => 'Invalid date'
                    ])->with('status', 'SESSION CREATED!');

            }else{
            

         Post::create([
            
            'topic' => request('topic'),
            'category' => request('category'),
            'country' => request('country'),
            'state'  => request('state'),
            'venue'  => request('venue'),
            'session_date' => request('session_date'),
            'session_time' => request('session_time'),
            'gender'  => request('gender'),
            'applicants' => request('applicants'),
            'description'=> request('description'),
            'user_id'=>auth()->id()
            ]);

        return redirect('/session')->withInput(Request()->except('user_id'))->with('status', 'SESSION CREATED!');
    }
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('post.edit')->with('posts', $posts);
    }


    public function update($id)
    {
         $user   = Auth::user()->id;

        // $id = Input::get('id');
        $topic = Input::get('topic');
        $category =  Input::get('category');
        $country   = Input::get('country');
        $state = Input::get('state');
        $venue = Input::get('venue');
        $session_date =Input::get('session_date');
        $session_time =Input::get('session_time');
        $gender = Input::get('gender');
        $applicants = Input::get('applicants');
        $description = Input::get('description');

        //$posts = Post::find($id);
        Post::where('id', $id)->update([
            'user_id' => auth()->id(),
          'topic' => $topic,
         'category' => $category,
         'country' => $country,
         'state' => $state,
         'venue' =>  $venue,
         'session_date' => $session_date,
         'session_time' => $session_time ,
          'gender' => $gender,
          'applicants' => $applicants,
          'description' => $description
        ]);

        
        return redirect('/dashboard/course')->with('status', 'UPDATED SUCESSFULLY');
    }

    public function mail($id)
    {           
            
            // $posts = User::where('id', $id)->get();
            // $user_email = $posts->pluck('email');
            $user = User::find($id);
            Mail::to($user)->send(new Reminder);

               // Mail::send('post.active', compact('posts'), function($message) use($posts)
               // {
               //    // dd($posts->pluck('email'));
               //  $user_email = $posts->pluck('email');
               //  // dd($user_email[0]);
               //    $message->from('collins@switch.ng','Collins ugwu')
               //            ->to($user_email[0]);
               //            //->subject($subject);
               // });
            
    }
}
