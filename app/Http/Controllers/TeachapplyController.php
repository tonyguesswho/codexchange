<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Teachapply;
use Auth;

class TeachapplyController extends Controller
{
  
  	public function __construct()
  	{
  		$this->middleware('auth');
  	}


  	protected  function store($id)
    {
    	$post = Post::findorFail($id);

    	$post->Teachapply()->save(new Teachapply(['user_id' => Auth::id()]));

    		// Teachapply::create([
    		//  'user_id' => auth()->id(),
    		//  'post_id' => $post->id,		
    		// ]);

    	return back()->with('status', 'SESSION APPLIED!');
   	 
    }



       public function teach_apply()
    	{
        
        $posts = Teachapply::where('user_id', Auth::user()->id)->latest()->paginate(10);
        
        return view( 'post.dashboard', compact('posts'));
        
   		 }
   

 	 public function destroy($id)
	 {
   		$post = Teachapply::findorFail($id);
   		Teachapply::where( 'id', $post->id)->delete();
   		return back()->with('status', 'DELETED SUCESSFULLY!');
  	  }



  	 public function view($id)
  	 {
   		 $views = Teachapply::where( 'post_id', $id )->paginate(10);
   		 return view('post.viewlist', compact('views'));
   	}
}
