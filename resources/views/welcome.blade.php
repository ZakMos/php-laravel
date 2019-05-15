@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Some Content</h1>
    <p>{{ "Hello"  }}</p>
  </div>
</div>


  <!--  output Hello  -->
  <!-- <p>{{ 2 == 2 ? "Hello" : "Does not equal" }}</p> -->

  <!-- output Does not equal -->
  <!-- <p>{{ 2 == 3 ? "Hello" : "Does not equal" }}</p> -->

  <!-- output Hello  -->
  <!-- <p>{{ "Hello"  }}</p> -->

@endsection
