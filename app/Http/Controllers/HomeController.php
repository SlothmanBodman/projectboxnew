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
        $posts = Posts::all();
        $users = Users::all();

        return view('home')->with('posts', $posts, 'users', $users);

    }

    public function filter(Request $request)
    {

      $type = $request->input('type');
      //dd($type);

      $posts = Posts::wheretype($type)->get();
      //dd($posts);
      return view('home')->with('posts', $posts);

    }
}
