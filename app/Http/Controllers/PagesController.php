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
      return view('projects');
  }
  //return profile template
  public function profile()
  {
      $posts = Posts::whereuser_id(Auth::id())->get();
      return view('profile')->with('posts', $posts);
  }
}
