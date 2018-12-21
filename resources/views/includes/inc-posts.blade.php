
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
      </div>
      <div class="content-container-footer">
        <p>
            <i class="fas fa-heart like-trigger" style="color: white;cursor: pointer"></i>
            <i class="fas fa-heart unlike-trigger hidden" style="color: red;cursor: pointer"></i>
            @if (empty($post->likes))
              0
            @else
              {{$post->likes}}
            @endif
        </p>
      </div>
  </div>
@endforeach
