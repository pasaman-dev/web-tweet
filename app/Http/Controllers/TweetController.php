<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    // halama main
    public function index(Request $request) {
        $tweet = Tweet::all();

        return view('tweet.index', compact('tweet'));
    }

    public function create(Request $request) {
        return view('tweet.create');
    }
}
