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


    public function count()
    {
        $count = DB::select("select comments.publication_id ,count(*) as Total from comments group by comments.publication_id"); 
        return $count;
    }


    /*public function comments() 
    {
       // return $this->hasMany(Publication::class);
       return $this->hasMany('App\Comment');
    } */

    public function comments() 
    {
       // return $this->hasMany(Publication::class);
       return $this->morphMany('App\Comment' , 'publication')->latest();
    }
}
