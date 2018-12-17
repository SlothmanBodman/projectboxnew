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
      $title = ' Project Briefs';
      $subtitle = 'Discover monthly, weekly, and randomly generated briefs to fuel your designs!';
      $img = '../public/images/hero-briefs.png';
      //return view function
      return view('projects', compact('title','subtitle', 'img'));
  }
  //return profile template
  public function profile()
  {
      //static layout data
      $title = 'Your Profile';
      $subtitle = 'Login or Sign Up to share your projects with the world!';
      $img = '../public/images/hero-profile.png';
      //database data
      $posts = Posts::whereuser_id(Auth::id())->get();
      //return view function
      return view('profile', compact('title','subtitle', 'img'))->with('posts', $posts);
  }
}
