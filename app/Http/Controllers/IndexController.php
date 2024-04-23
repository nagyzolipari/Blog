<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Topic;
use App\Models\FavouriteTopic;



use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index():View
    {
        return view('index', [
                'comments' => Comment::all(),
                'topics' => Topic::all(),
                'favourite_topics' => FavouriteTopic::all()
            ]
        );
    }
}
