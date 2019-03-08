@foreach ($posts->reverse() as $post)
    <div class="content-container">
        <div class="content-container-header">
          <a class="alternate_link" href="{{ route('userprofile', ['id' => $post->user_id])}}">{{$post->user_name}}</a>
        </div>
        <div class="content-container-body">
          <img class="post-img" src="{{url('storage/'.$post->image_url)}}">
        </div>
        <div class="content-container-footer">
          <p>
                @if(in_array($post->id, $userLikes))
                  <i class="fas fa-heart unlike-trigger" name="{{$post->id}}" style="color: red;"></i>
                  <i class="fas fa-heart like-trigger hidden" id="like{{$post->id}}"  name="{{$post->id}}" style="color: white;cursor: pointer"></i>
                  <span id="likesCount{{$post->id}}">{{$post->likes}}</span>
                @else
                  <i class="fas fa-heart unlike-trigger hidden" id="unlike{{$post->id}}" name="{{$post->id}}" style="color: red;"></i>
                  <i class="fas fa-heart like-trigger" id="like{{$post->id}}" name="{{$post->id}}" style="color: white;cursor: pointer"></i>
                  <span id="likesCount{{$post->id}}" name="{{$post->likes}}">{{$post->likes}}</span>
                @endif
          </p>
        </div>
        <div class="content-container-footer">
          <p>{{$post->user_name}}: {{$post->caption}}</p>
        </div>
        <div class="content-container-footer" style="background-color: var(--bg-green);">
          <form class="" action="" method="post">
            <input type="text" class="comment-input{{$post->id}}" style="display:inline-block; width: 77%;"></input>
            <button type="button" name="{{$post->id}}" class="comment-trigger" style="display:inline-block; width: 20%;">Comment</button>
          </form>
        </div>
        <!-- COMMENTS SECTION -->
        <div class="content-container-body">
          <div class="content-container-comment hidden" id="fake-comment{{$post->id}}">
            <span >You</span>: <span class="fake-comment"></span>
          </div>
        @foreach ($post->comments->reverse() as $comment)
            <div class="content-container-comment">
              <b>{{$comment->user_name}}: {{$comment->caption}}</b>
            </div>
      @endforeach
        </div>
        <!-- COMMENTS SECTION END-->
        <div class="content-container-footer">

        </div>
    </div>
@endforeach
