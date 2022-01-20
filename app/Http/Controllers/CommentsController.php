<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    // Affiche le template Index_Resources en y ajoutant un nouveau "Comment" et en le stockant dans la DB
    public function add(Request $request){
        $comment = new Comment;
        $comment->user_name = $request->name;
        $comment->content = $request->message;
        $comment->resource_id = $request->resourceID;
        $comment->save();
        return view ('comments._show', ['comment' =>$comment, 'comments' => \App\Models\Comment::where('resource_id', '=', $request->resourceID)->get()
    ]);
    }
}