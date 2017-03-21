<?php

namespace App;




class Teachapply extends Model
{
     public function User()

    {
    	return $this->belongsTo(User::class);
    }


   public function Post()

   {
    	return $this->belongsTo(Post::class);
    }


}
