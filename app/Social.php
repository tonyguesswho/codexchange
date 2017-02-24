<?php

namespace App;



class Social extends Model
{
    public function User(){
    	return $this->belongsTo(User::class);
    }
}
