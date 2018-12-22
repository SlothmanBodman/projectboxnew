
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


              <i class="fas fa-heart unlike-trigger hidden" style="color: red;cursor: pointer"></i>
              <i class="fas fa-heart like-trigger" name="{{$post->id}}" style="color: white;cursor: pointer"></i>
              {{$post->likes}}

        </p>
      </div>
  </div>
@endforeach
