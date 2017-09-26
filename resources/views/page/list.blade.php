@extends('layouts.app')

@section('content')
   <h1>List Articles</h1>
   @foreach($posts as $post)

  	{{ $post->title }}
  	{{ $post->description }}
  	{{ $post->image }}
  	{{ $post->content }}

  	<hr>
              
    @endforeach

		
@endsection
