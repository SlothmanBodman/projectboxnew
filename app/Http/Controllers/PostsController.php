<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Users;
use App\likes;

class PostsController extends Controller
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

  public function create(Request $request)
  {
    //validate form data
    request()->validate([
      'caption' => 'required',
      'type' => 'required',
      'file' => 'required',
    ]);

    //Generate UUID for image and upload to storage
    $image = $request->file('file');
    $extension = $image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

    $post = new \App\Posts();

    $post->caption = $request->input('caption');
    $post->type = $request->input('type');
    $post->user_id = Auth::id();
    $post->user_name = Auth::user()->name;
    $post->image_url = $image->getFilename().'.'.$extension;
    $post->save();

    return redirect()->route('profile');
  }

  public function likePost(Request $request)
  {
    $like = new \App\likes();

    $like->user_id = Auth::id();
    $like->post_id = $request['postId'];
    $like->save();
  }

}
