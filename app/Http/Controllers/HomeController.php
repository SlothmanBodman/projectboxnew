<?php

namespace App\Http\Controllers;

//facades
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//models
use App\Posts;
use App\User;
use App\Users;
use App\likes;

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
        //static layout data
        $title = 'Welcome to Project Box';
        $subtitle = 'Your one stop destination for design projects and inspiration!';
        $img = '../public/images/hero-home.png';
        //database data
        $posts = Posts::all();
        $userLikes = auth()->user()->likes->pluck('post_id')->toArray();

        //return view function
        return view('home', compact('title','subtitle', 'img'))->with('posts', $posts)->with('userLikes', $userLikes);

    }

    public function filter(Request $request)
    {
      //static layout data
      $title = 'Welcome to Project Box';
      $subtitle = 'Your one stop destination for design projects and inspiration!';
      $img = '../public/images/hero-home.png';

      //get filter tag from form data
      $type = $request->input('type');

      //get posts from table where type is selected type
      $posts = Posts::wheretype($type)->get();
      //get liked posts
      $userLikes = auth()->user()->likes->pluck('post_id')->toArray();

      return view('home', compact('title', 'img', 'subtitle'))->with('posts', $posts, 'userLikes', $userlikes);

    }
}
