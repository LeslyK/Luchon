@extends('layouts.app')

@section('content')
   <h1>Creation Article</h1>
		@if(Session::has('flash_message'))
			<div class="alert alert-success">
			  {{ Session::get('flash_message') }}
			</div>
		@endif

		@if($errors->any())
			<div class="alert alert-danger">
			  @foreach($errors->all() as $error)
			  <p>{{ $error }}</p>
			  @endforeach
			</div>
		@endif

		 {!! Form::open(['route' => ['ActionStore']]) !!}

		<div class="form-group">
          {!! Form::label('title', 'Titre', ['class' => 'control-label']) !!}
          {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
          {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
          {!! Form::file('image', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('content', 'Contenu', ['class' => 'control-label']) !!}
          {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}



@endsection
