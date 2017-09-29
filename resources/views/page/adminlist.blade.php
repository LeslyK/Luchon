@extends('layouts.app')

@section('content')
   <h1>List Admin</h1>
    <table class="table table-inverse">
      <thead>
        <tr>
          <th>Actions</th>
          <th>Titre</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
          @if($posts->count())
            @foreach($posts as $post)
            <tr>
                <td style="text-align:center;">
                  <a href="{{ route('edit', $post->id) }}"><i class="fa fa-pencil">mod</i></a>
                  <a href="{{ route('destroyPost', $post->id) }}"><i class="fa fa fa-ban">del</i></a>
                </td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
            </tr>
            @endforeach

          @endif
      </tbody>
    </table>
    <a href="{{ route('creation') }}" class="btn">Ajouter un  article</a>
@endsection
