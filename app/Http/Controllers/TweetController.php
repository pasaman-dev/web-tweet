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

    public function submit(Request $request) {
        // validate
        $this->validate($request, [
            'image' => 'required',
            'content' => 'required',
        ]);

        // proses gambar dan simpan
        $image = $request->file('image');
        $image->storeAs("public/tweets", $image->hashName());

        // simpan data ke tables
        Tweet::create([
            'image_name' => $image->hashName(),
            'content' => $request->content,
        ]);

        // Redirect ke halaman dashboard kembali
        return redirect()->route('dashboard')->with(["success" => "success"]);
    }
}
