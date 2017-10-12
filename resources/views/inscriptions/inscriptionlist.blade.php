@extends('layouts.app')

@section('content')
   <h1>List Admin</h1>
   <table class="table table-inverse">
       <thead>
           <tr>
             <th>Class</th>
             <th>Enseignent Référent</th>
             <th>Nombre d'éléves</th>
             <th>Accompagnant</th>
             <th>Contact</th>
             <th>Supprime</th>
           </tr>
       </thead>
       <tbody>
         @foreach($inscrits as $inscriptions)
            <tr>
              <td>{{$inscriptions->classe_1}}</td>
              <td>{{$inscriptions->referent_1}}</td>
              <td>{{$inscriptions->nombre_1}}</td>
              <td>{{$inscriptions->accompagnant_1}}</td>
              <td>{{$inscriptions->mail_2}}</td>
              <td><a href="{{ route('deleteInscription', $inscriptions->id) }}">Supp</a></td>
            </tr>
         @endforeach
       </tbody>

     </table>
 @endsection
