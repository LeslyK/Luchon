@extends('layouts.app')

    @section('content')
    <div class="container">
        <h3>Galerie Images</h3>
        <form action="{{ url('image-gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Oups!</strong> réessayer.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row">
                <div class="col-md-3">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-3">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-4">
                    <strong>Description:</strong>
                    <input type="textarea" name="comment" class="form-control" placeholder="Commentaire">
                </div>
                <div class="col-md-2">
                    <br/>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form><br>
        <div class="row">
            <div class='list-group gallery col-md-10'>
                @if($images->count())
                    @foreach($images as $image)
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="#">
                            <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->title }}</small>
                            </div> <!-- text-center / end -->
                        </a>
                        <form action="{{ url('image-gallery',$image->id) }}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        {!! csrf_field() !!}
                        <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                        </form>
                    </div> <!-- col-6 / end -->
                    @endforeach
                @endif
            </div>
        </div>
    @endsection
