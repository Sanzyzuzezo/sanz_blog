

@extends('layouts.main')

@section('container')

   <div class="container">
    <div class="row justify-content-center mb-5">
     <div class="col-md-8">
      <h1 class="mb-3">{{  $post->title }}</h1>
       <P>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></P>
        @if ($post->image)
        <div style="max-height: 500px; overflow: hidden;">
        <img src="{{ asset('admin/post/image/'. $post->image) }}" class="card-img-top mt-3" alt="">
        </div>
        <article class="my-3 fs-5">
        @else
        <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
        <article class="my-3 fs-5">
        @endif
        {!! $post->body !!}
       </article>
      <a href="/posts" class="d-block mt-3">Back to Posts</a>
     </div>
    </div>
   </div>

@endsection 