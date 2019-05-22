@extends('layouts.master')
@section('content')
<div class="mt-3">
  <div class="row">
    <div class="col-md-12">
      <p class="quote">The Beautiful Laravel</p>
    </div>
  </div>
  @foreach ($posts as $post)

  <div class="row">
    <div class="col-md-12">
      <h1 class="post-title">{{ $post['title'] }}</h1>
      <p>{{ $post['content'] }}</p>
      <p><a href="{{ route('blog.post', ['id' => array_search($post, $posts)]) }}">Read More...</a></p>
    </div>
  </div>
  <hr>
  @endforeach;
</div>
@endsection
