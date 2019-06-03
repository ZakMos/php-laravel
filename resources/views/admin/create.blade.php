@extends('layouts.master')

@section('content')
<div class="mt-3">
  @include('partials.errors')
  <div class="row">
    <div class="col-md-12">
      <form class="" action=" {{ route('admin.create')}}" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input type="text" class="form-control" id="content" name="content" value="">
        </div>
        @foreach($tags as $tag)
        <div class="checkbox">
          <label for="">
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
          </label>
        </div>
        @endforeach
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection
