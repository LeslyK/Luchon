@extends('layouts.app')

@section('content')
    <h2>Festival Fiche d’Inscription</h2>
      <div class="col">
        <form action="inscrire" method="post">
      <table class="table table-bordered">
            <thead>
              <tr>
                <th>Classe</th>
                <th>Nom l’enseignant référent</th>
                <th>Nombre d’élèves</th>
                <th>Nombre d’accompagnant</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td><input class="form-control" type="text" name="classe_1"></td>
                  <td><input class="form-control" type="text" name="referent_1"></td>
                  <td><input class="form-control" type="text" name="nombre_1"></td>
                  <td><input class="form-control" type="text" name="accompagnant_1"></td>
              </tr>
              <!-- <tr>
                  <td><input class="form-control" type="text" name="classe_2"></td>
                  <td><input class="form-control" type="text" name="referent_2"></td>
                  <td><input class="form-control" type="text" name="nombre_2"></td>
                  <td><input class="form-control" type="text" name="accompagnant_2"></td>
              </tr> -->
            </tbody>
      </table>
      <table class="table table-bordered">
            <thead>
              <tr>
                <th>Description</th>
                <th>Remarque</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>{!! Form::label('title', 'Nom de l’établissement scolaire :') !!}</td>
                  <td><input class="form-control" type="text" name="etablissement"></td>
              </tr>
              <tr>
                  <td>{!! Form::label('title', 'Adresse :') !!}</td>
                  <td><input class="form-control" type="address" name="adresse"></td>           
              </tr>
              <tr>
                  <td>{!! Form::label('title', 'Code postal :') !!}</td>
                  <td><input class="form-control" type="text" name="code"></td>          
              </tr>
              <tr>
                  <td>{!! Form::label('title', 'Téléphone :') !!}</td>
                  <td><input class="form-control" type="tel" name="telephone"></td>           
              </tr>
              <tr>
                  <td>{!! Form::label('title', 'Email de l’établissemen :') !!}</td>
                  <td><input class="form-control" type="text" name="mail_1"></td>      
              </tr>
              <tr>
                  <td>{!! Form::label('title', 'Email de l’enseignant référent :') !!}</td>
                  <td><input class="form-control" type="text" name="mail_2"></td>            
              </tr>
            </tbody>
      </table>
      <input type="submit" value="Enregistrer" style="color:#333333" />
        </form>
        <script type="text/javascript">

        </script>
      </div>

@endsection