<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

use App\Events\NewComment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'topic_id' => 'required|exists:topics,id',
            'body' => 'required|string',
        ]);

        $comment = Comment::create([
            'user_id' => $request->user_id,
            'topic_id' => $request->topic_id,
            'body' => $request->body,
        ]);

        //Új Komment Esemény Pusher által
        event(new NewComment($comment));

        return response()->json($comment, 201);
    }
}
