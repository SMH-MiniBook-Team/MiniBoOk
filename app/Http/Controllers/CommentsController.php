<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Comment;
use App\Notifications\NewCommentPosted;
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

        $publication->user->notify(new NewCommentPosted($publication , auth()->user()));

        return back();


        //return back();

    }
    public function showPost($id)
    {
        $publication = Publication::find($id);

        return view('publications.show' , ['publication' => $publication]);
    }





    public function storeCommentReply(Comment $comment)
    {
        request()->validate([
            'replyComment' => 'required|min:3' // on veut au mnimum 3 caractere
        ]);

        $commentReply = new Comment();
        $commentReply->body = request('replyComment');
        $commentReply->user_id = auth()->user()->id; // pour récuperer Id de user

        $comment->comments()->save($commentReply);

        return back();
    }
}
