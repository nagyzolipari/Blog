<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

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

        return response()->json($comment, 201);
    }
}
