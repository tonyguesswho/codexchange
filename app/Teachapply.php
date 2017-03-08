<?php

namespace App;




class Teachapply extends Model
{
     public function user()

    {
    	return $this->belongsTo(user::class);
    }


   public function post()

   {
    	return $this->belongsTo(post::class);
    }


}
