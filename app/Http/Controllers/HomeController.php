<?php

namespace App\Http\Controllers;

//facades
use Illuminate\Http\Request;
//models
use App\Posts;
use App\User;
use App\Users;

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
        $users = Users::all();
        //return view function
        return view('home', compact('title','subtitle', 'img'))->with('posts', $posts, 'users', $users);

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

      return view('home', compact('title', 'img', 'subtitle'))->with('posts', $posts);

    }
}
