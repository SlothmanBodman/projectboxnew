
@foreach ($followPosts as $post)
  <div class="content-container" id="{{$post->type}}">
      <div class="content-container-header">
        <a class="alternate_link" href="{{ route('userprofile', ['id' => $post->user_id])}}"><p class="small-header">{{$post->user_name}}</p></a>
      </div>
      <div class="content-container-body">
        <img class="post-img" src="{{url('storage/'.$post->image_url)}}">
      </div>
      <div class="content-container-footer">
        <p class="paragraph">{{$post->user_name}}: {{$post->caption}}</p>
      </div>
      <div class="content-container-footer">
        <p class="paragraph">
              @if(in_array($post->id, $userLikes))
                <i class="fas fa-heart unlike-trigger" name="{{$post->id}}" style="color: var(--primary);"></i>
                <i class="fas fa-heart like-trigger hidden" id="like{{$post->id}}"  name="{{$post->id}}" style="color: #9b9b9b;cursor: pointer"></i>
                <span id="likesCount{{$post->id}}">{{$post->likes}}</span>
              @else
                <i class="fas fa-heart unlike-trigger hidden" id="unlike{{$post->id}}" name="{{$post->id}}" style="color: var(--primary);"></i>
                <i class="fas fa-heart like-trigger" id="like{{$post->id}}" name="{{$post->id}}" style="color: #9b9b9b;cursor: pointer"></i>
                <span id="likesCount{{$post->id}}" name="{{$post->likes}}">{{$post->likes}}</span>
              @endif
        </p>
      </div>
      <div class="content-container-footer" style="background-color: var(--bg-green);">
        <form class="" action="" method="post">
          <input id="comment-input" type="text" class="comment-input{{$post->id}}" style="display:inline-block; width: 77%;"></input>
          <button type="button" name="{{$post->id}}" class="comment-trigger" style="display:inline-block; width: 20%;">Comment</button>
        </form>
      </div>
      <!-- COMMENTS SECTION -->
      <div class="content-container-body">
        <div class="content-container-comment hidden" id="fake-comment{{$post->id}}">
          <p class="paragraph"><span >{{Auth::user()->name}}</span>: <span class="fake-comment"></span></p>
        </div>
      @foreach ($post->comments->reverse() as $comment)
          <div class="content-container-comment">
            <p class="paragraph">{{$comment->user_name}}: {{$comment->caption}}</p>
          </div>
    @endforeach
      </div>
      <!-- COMMENTS SECTION END-->
      <div class="content-container-footer">

      </div>
  </div>
@endforeach
