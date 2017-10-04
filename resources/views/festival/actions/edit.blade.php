@extends('layouts.app')

@section('content')



		{!! Form::model($action, ['method' => 'POST','route' => ['actionUpdate', $action->id]]) !!}

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

        {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}


@endsection
