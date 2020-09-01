<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Comment;
use Illuminate\Http\Request;
use DB;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Publication $publication)
    {
        request()->validate([
            'body' => 'required|min:2' // on veut au mnimum 2 caracteres
        ]);
        
        $comment = new Comment();
        $comment->body = request('body');
        $comment->user_id = auth()->user()->id; // pour récuperer Id de user
        $comment->publication_id = $publication->id; // pour récuperer Id de la publication où on veut commenter 
        $publication->comments()->save($comment);

        return back();

    }
    public function showPost($id)
    {
        $publication = Publication::find($id);

        return view('publications.show' , ['publication' => $publication]);
    }
}
