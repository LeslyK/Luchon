@extends('layouts.app')

@section('content')
    <h1>Action Hors festival</h1>
    @if ($actions->count())
          @foreach($actions as $action)
               <article>
                 <a href="actiondescript/{{$action->id}}" target="_blank">
                    <h4>{{ $action->title }}</h4>
                 </a>
                 {{ $action->description }}<br>
                 <!-- {{ $action->image }}<br>
                 {{ $action->content }} -->
               </article>
                 @if(!$loop->last)
                   <hr>
                 @endif
          @endforeach
   @endif
@endsection



<!-- <div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-6 bordure">


        </div>
    </div>
</div> -->
