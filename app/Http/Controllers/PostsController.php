<?php

namespace App\Http\Controllers;
//facades and helpers
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//database models
use App\Users;
use App\likes;
use App\Comments;

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
/*CREATE NEW POST*/
  public function create(Request $request)
  {
    //validate form data
    request()->validate([
      'caption' => 'required',
      'type' => 'required',
      'file' => 'required|mimes:jpeg,bmp,png,gif',
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
    $post->likes = 0;
    $post->image_url = $image->getFilename().'.'.$extension;
    $post->save();

    return redirect()->back();
  }
/*ADD POST LIKE*/
  public function likePost(Request $request)
  {
    //edit posts like Count
    $postId = $request->input('postId');
    DB::table('posts')->where('id', $postId)->increment('likes');
    //create new like instance
    $like = new \App\likes();
    //insert like data
    $like->user_id = Auth::id();
    $like->post_id = $request->input('postId');
    $like->save();
    //end process
    return;
  }

  public function unlikePost(Request $request)
  {
    //create relavant data variables
    $postId = $request->input('postId');
    $userId = Auth::id();
    //decrement posts likes
    DB::table('posts')->where('id', $postId)->decrement('likes');
    //delete like entry
    DB::table('likes')->where('post_id', $postId)->where('user_id', $userId)->delete();
    //end function
    return;
  }


  public function createComment(Request $request)
  {
    //create new comment instance
    $comment = new \App\comments();

    $comment->user_id = Auth::id();
    $comment->post_id = $request->input('postId');
    $comment->user_name = Auth::user()->name;
    $comment->caption = $request->input('comment');
    $comment->likes = 0;
    $comment->save();

    return;
  }
}
