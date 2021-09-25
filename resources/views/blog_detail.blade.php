@extends('templates')

@section('container')

<h1 class="mb-3 mt-3">{{ $title }}</h1>

<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">{{ $post['title'] }}</h5>
    <p class="card-text">{{ $post['description'] }}</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<a class="mb-3 mt-3" href="/blog">< Back</a>

@endsection