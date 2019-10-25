<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /**$user_id = auth()->user()->id;
        $user = User::find($user_id);
        $posts = $user->posts;
        $posts = $posts->paginate(1);
        return view('home')->with('posts', $posts);
            nejde použít paginate pro kolekci
        */
        $posts = Post::where('user_id', Auth::id())
                          ->orderBy('updated_at','desc')
                          ->paginate(5);
        return view('home')->with('posts', $posts);
    }
}
