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
use App\Comments;
use App\Followers;

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
        //database data
        $userLikes = auth()->user()->likes->pluck('post_id')->toArray();
        $followIdArray = Followers::where('user_id', '=', Auth::id())->pluck('follow_id')->toArray();
        $followPosts = Posts::with('comments')->whereIn('user_id', $followIdArray)->orderBy('created_at', 'desc')->simplePaginate(20);

        return view('home')->with('userLikes', $userLikes)->with('followPosts', $followPosts);


    }

    public function global()
    {
      $posts = Posts::with('comments')->orderBy('created_at', 'desc')->simplePaginate(20);
      $userLikes = auth()->user()->likes->pluck('post_id')->toArray();

      //return view function
      return view('globalfeed')->with('posts', $posts)->with('userLikes', $userLikes);
    }

    public function filter(Request $request)
    {

      //get filter tag from form data
      $type = $request->input('type');

      //get posts from table where type is selected type
      $posts = Posts::where('type', '=', $type)->with('comments')->simplePaginate(1);
      //get liked posts
      $userLikes = auth()->user()->likes->pluck('post_id')->toArray();

      return view('globalfeed')->with('posts', $posts)->with('userLikes', $userLikes);

    }
}
