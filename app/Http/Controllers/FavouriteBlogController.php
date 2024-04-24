<?php

namespace App\Http\Controllers;

use App\Models\FavouriteTopic;
use App\Models\Topic;
use App\Models\TopicType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FavouriteBlogController extends Controller
{
    public function index():View
    {
        return view('favourite_blog', [
                'topics' => Topic::all(),
                'topic_types' => TopicType::all(),
                'favourite_topics' => FavouriteTopic::all()
            ]
        );
    }
}
