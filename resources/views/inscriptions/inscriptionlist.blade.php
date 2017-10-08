@extends('layouts.app')

@section('content')
   <h1>List Admin</h1>
   <!-- <table class="table table-inverse">
       <thead>
           <tr>
             <th>Titre</th>
             <th>Description</th>
             <th><a href="{{ route('actionCreate')}}" style="color: #ffffff " target="_blank">Ajouter</a></th>
             <th>Modifier</th>
             <th>Supprimer</th>
           </tr>
       </thead>
       <tbody>
         @foreach($actions as $action)
           <tr>
             <td>{{$action->title}}</td>
             <td>{{$action->description}}</td>
             <td style="text-align:left;"><a href="{{ route('actionCreate')}}" target="_blank"><i class="fa fa-pencil-square-o" aria-hidden="true">Add</i></a></td>
             <td style="text-align:left;"><a href="{{ route('actionEdit', $action->id)}}"><i class="fa fa-pencil">mod</i></a></td>
             <td style="text-align:left;"><a href="{{ route('actionDelete', $action->id)}}"><i class="fa fa fa-ban">del</i></a></td>
           </tr>
           @endforeach
       </tbody>
     </table> -->
 @endsection
