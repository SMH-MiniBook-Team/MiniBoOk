<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];


    public function user() {
        return $this->belongsTo('App\User');
    }


   
    
    public function publication() {
        return $this->belongsTo('App\Publication');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment' , 'publication')->latest();
        //latest : c'est pour recuperer les reponses le plus recents 
    }
    
}
