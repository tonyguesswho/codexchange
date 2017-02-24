<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ->paginate(2);

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
        $posts = Post::find($id);
        Post::create([
            'user_id' => auth()->id(),
          'topic' => $posts->topic,
         'category' => $posts->category,
         'country' => $posts->country,
         'state' => $posts->state,
         'venue' =>  $posts->venue,
         'session_date' => $posts->session_date,
         'session_time' => $posts->session_time ,
          'gender' => $posts->gender,
          'applicants' => $posts->applicants,
          'description' => $posts->description
        ]);

        Session()->flash('message', 'Successfully updated!');
        return redirect('/session');
    }
}
