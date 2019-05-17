@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form class="" action="" {{ route('admin.update')}}"" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input type="text" class="form-control" id="content" name="content" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </form>
    </div>
  </div>

@endsection
