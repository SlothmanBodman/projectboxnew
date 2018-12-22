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
    </div>
@endforeach
