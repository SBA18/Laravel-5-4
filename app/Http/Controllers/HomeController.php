<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::OrderDateDesc()->get()->where('user_id', '1');
        //dd($posts); die();
        return view('home', compact('posts'));
    }

    public function profile($id)
    {
        $user = User::findorFail($id);
        return view('profile', compact('user'));
    }

}
