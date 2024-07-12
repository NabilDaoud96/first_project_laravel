<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at','desc')->get();
        return view('topic.index',compact('topics'));
    }

    public function show(Topic $topic)
    {
//          $topic->delete();
            /*$topic->update([
                'title' => 'update topic'
            ]);*/
        return view('topic.show',compact('topic'));
    }
}

