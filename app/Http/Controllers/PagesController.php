<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  //Authenticate User
  public function __construct()
  {
      $this->middleware('auth');
  }

  //return projects template
  public function projects()
  {
      //static layout data
      $title = 'Projects';
      //return view function
      return view('projects', compact('title'));
  }
  //return profile template
  public function profile()
  {
      //static layout data
      $title = 'Profile';
      //database data
      $posts = Posts::whereuser_id(Auth::id())->get();
      //return view function
      return view('profile', compact('title'))->with('posts', $posts);
  }
}
