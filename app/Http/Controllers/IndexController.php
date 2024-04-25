<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Topic;
use App\Models\TopicType;
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
                'topic_types' => TopicType::all(),
                'favourite_topics' => FavouriteTopic::all()
            ]
        );
    }
}
