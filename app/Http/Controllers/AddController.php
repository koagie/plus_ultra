<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add() {
        return view('add');
    }

    public function wys() {
        return view('wysiwyg');
    }

    public function save_new(Request $request) {
        $post = new AddController;
        $post->title = $request->title;
        $post->main = $request->main; 
        $post->save_new();

        return redirect ('/')->with('新しい投稿をしました。');
    }

}
