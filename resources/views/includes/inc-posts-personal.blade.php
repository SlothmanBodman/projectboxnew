@foreach ($posts->reverse() as $post)
    <div class="content-container">
        <div class="content-container-header">
          {{$post->user_name}}
        </div>
        <div class="content-container-body">
          <img class="post-img" src="{{url('storage/'.$post->image_url)}}">
        </div>
        <div class="content-container-footer">
          <p>{{$post->caption}}</p>
        </div>
    </div>
@endforeach
