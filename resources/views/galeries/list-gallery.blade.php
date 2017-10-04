@extends('layouts.app')

    @section('content')
    <div class="container">
    <h3>Galeries</h3>
      <div class="row">
          <div class='list-group gallery col-md-10'>
              @if($images->count())
                  @foreach($images as $image)
                  <div class='col-sm-4 col-xs-6 col-md-3 col-lg-6'>
                      <a class="thumbnail fancybox" rel="ligthbox" href="#" >
                          <div class='text-center'>
                              <small class='text-muted'>{{ $image->title }}</small>
                          </div>
                          <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                          <div class='text-center'>
                              <small class='text-muted'>{{ $image->comment }}</small>
                          </div>
                      </a>
                  </div>
                  @endforeach
              @endif
          </div>
      </div>
    </div>
    @endsection
