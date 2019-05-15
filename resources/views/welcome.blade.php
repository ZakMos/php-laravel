@extends('layouts.master')
@section('content')
  <h1>Some Content</h1>

  <!--  output Hello  -->
  <p>{{ 2 == 2 ? "Hello" : "Does not equal" }}</p>

  <!-- output Does not equal -->
  <p>{{ 2 == 3 ? "Hello" : "Does not equal" }}</p>

  <!-- output Hello  -->
  <p>{{ "Hello"  }}</p>

@endsection
