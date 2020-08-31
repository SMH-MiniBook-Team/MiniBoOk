<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['content','image','video'];


    public function user()
    {
        //$this->belongsTo(User::class, 'user_id');
        return $this->belongsTo('App\User');
    }



  
}
