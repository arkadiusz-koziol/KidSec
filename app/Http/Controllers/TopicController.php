<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show($topic)
    {
        return view('topics.' . $topic);
    }
}
