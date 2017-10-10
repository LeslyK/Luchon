@extends('layouts.app')

@section('content')
   <h1>List Admin</h1>
   <table class="table table-inverse">
       <thead>
           <tr>
             <th>Titre</th>
             <th>Description</th>
             <th><a href="{{ url('actions/create')}}" style="color:#ffffff">Ajouter</a> </th>
             <th>Modifier</th>
             <th>Supprimer</th>
           </tr>
       </thead>
       <tbody>
         @foreach($actions as $action)
            <tr>
              <td>{{$action->title}}</td>
              <td>{{$action->description}}</td>
              <td><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
              <td><a href="#">modif<i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
              <td><a href="{{ route('actionDelete', $action->id)}}">sup<i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
            </tr>
         @endforeach
     </table>
 @endsection
