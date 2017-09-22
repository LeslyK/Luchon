@extends('layouts.app')

@section('content')
    <div class="container">
    <h3>Editon</h3>
	    <form action="{{ url('edition') }}" class="form-upload" method="POST" enctype="multipart/form-data">
	        {!! csrf_field() !!}              
	        <div class="row">
	            <div>
	                <strong>Title:</strong>
	                <input type="text" name="title" class="form-control" placeholder="Title">
	            </div>
	            
	            <div >
	                <strong>Description:</strong>
	                <input type="textarea" name="comment" class="form-control" placeholder="Commentaire">
	            </div>

	            <div >
	                <strong>contenu:</strong>
	                <input type="textarea" name="content" class="form-control" placeholder="Commentaire">
	            </div>
	        
	        	<div>
	                <strong>Image:</strong>
	                <input type="file" name="image" class="form-control">
	            </div>

	            <div>
	                <br/>
	                <button type="submit" class="btn btn-success">Upload</button>
	            </div>
	        </div>
	    </form>
    </div> <!-- container / end --> 
@endsection