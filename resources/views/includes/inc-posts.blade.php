@foreach ($posts->reverse() as $post)
<div class="col-md-8">
  <div class="row justify-content-center">
    <div class="card">
        <div class="card-header">{{$post->caption}}</div>

        <div class="card-body">
          <img class="card-img-top temp-size-cont" src="{{url('storage/'.$post->image_url)}}">
        </div>
    </div>
  </div>
</div>
@endforeach
