@extends('layouts.admin')

@section('content')
<div class="mt-3">
  @if(count($errors->all()))
  <div class="crow">
    <div class="col-md-12">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endif
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
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection
