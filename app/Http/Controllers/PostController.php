<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Teachapply;
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



    public function session()
    {
        $search = \Request::get('search');
        $posts = Post::where('topic','like', '%'.$search.'%' )
        ->orwhere('state','like', '%'.$search.'%')
        ->latest()
        ->paginate(5);

        return view('post.session', compact('posts'));
           
     }


     public function search()
     {
        $search = \Request::get('search');
        $posts = Post::where('topic','like', '%'.$search.'%' )
        ->orwhere('state','like', '%'.$search.'%')
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
}
