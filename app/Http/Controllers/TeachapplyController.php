<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\Teachapply;
use Auth;
use Mail;
use App\Mail\Reminder;

class TeachapplyController extends Controller
{
  
    public function __construct()
    {
      $this->middleware('auth');
    }

   

    protected  function store($id)
    {
      $post = Post::findorFail($id);
      if($post->user_id == Auth::user()->id)
      {
        return back()->with('status', 'SESSION WAS CREATED BY YOU!');

      }else{

      $post->Teachapply()->save(new Teachapply(['user_id' => Auth::id()]));
      
      return back()->with('status', 'SESSION APPLIED!');
     }
    }

   

       public function teach_apply()
      {
        
        $posts = Teachapply::where('user_id', Auth::user()->id)->latest()->paginate(10);
        
        return view( 'post.dashboard', compact('posts'))->with('status', 'SESSIONS APPLIED!');
        
       }
   

   public function destroy($id)
   {
      $post = Teachapply::destroy($id);
      return back()->with('status', 'DELETED SUCESSFULLY!');
      }



     public function view($id)
     {
       $views = Teachapply::where( 'post_id', $id )->paginate(10);
       return view('post.viewlist', compact('views'));
    }
}
