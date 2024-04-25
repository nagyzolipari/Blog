<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\FavouriteTopic;
use App\Models\Topic;
use App\Models\TopicType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index():View
    {
        return view('blog', [
                'comments' => Comment::all(),
                'topics' => Topic::all(),
                'topic_types' => TopicType::all(),
                'favourite_topics' => FavouriteTopic::all()
            ]
        );
    }
}
