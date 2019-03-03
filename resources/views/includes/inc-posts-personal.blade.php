@foreach ($posts->reverse() as $post)
    <div class="content-container">
        <div class="content-container-header">
          {{$post->user_name}}
        </div>
        <div class="content-container-body">
          <img class="post-img" src="{{url('storage/'.$post->image_url)}}">
        </div>
        <div class="content-container-footer">
          <p>{{$post->user_name}}: {{$post->caption}}</p>
          <p style="display: none;" id="postId">{{$post->id}}</p>
        </div>
        <div class="content-container-footer">
          <p>Likes: {{$post->likes}}</p>
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
