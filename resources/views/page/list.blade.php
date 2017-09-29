@extends('layouts.app')

@section('content')
   <h1>List Articles</h1>
   @foreach($posts as $post)
    <article>
      {{ $post->title }}<br>
    	{{ $post->description }}<br>
    	{{ $post->image }}<br>
    	{{ $post->content }}
    </article>
    @if(!$loop->last)
    	<hr>
    @endif
  @endforeach


@endsection
