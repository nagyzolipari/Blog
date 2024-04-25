<?php

namespace App\Http\Controllers;

use App\Models\FavouriteTopic;
use App\Models\Topic;
use App\Models\TopicType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index():View
    {
        return view('dashboard', [
                'topics' => Topic::all(),
                'topic_types' => TopicType::all(),
                'favourite_topics' => FavouriteTopic::all()
            ]
        );
    }
}
