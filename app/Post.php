<?php

namespace App;

// use carbon\carbon;


class Post extends Model
{
    public function user()
    {

   		return	$this->belongsTo(User::class);
    
    }

    public function Teachapply()
    {

   		return	$this->hasMany(Teachapply::class);
    
    }

   
}
