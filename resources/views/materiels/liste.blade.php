@extends('layouts.app')

@section('content')
<div class="row">
  <div class="jumbotron col-lg-12">
  <h1>Gestionnaire matériel</h1>
</div>
  </div>
<div class="row">
  <div class="col-lg-2 jumbotron">
    <form id="form" class="" action="/search/materiel" method="post">
      <fieldset>
          <legend>Recherche matériels</legend>
            {{ csrf_field() }}
              <div class="form-group">
            <label for="departement">Par departement: </label>
            <input autofocus="autofocus" class="form-control" type="number" name="departement" id="departement" />
          </div>
          <div class="form-group">
          <label for="logiciel">Par logiciel: </label>
          <input autofocus="autofocus" class="form-control" type="text" name="logiciel" id="logiciel" />
          </div>
          <div class="form-group">
          <label for="IA">Par IA: </label>
          <input class="form-control" type="text" name="IA" id="IA" />
          </div>
          <button name="commit" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button></br></br>
      </fieldset>
    </form>
  </div>
<section>
<div style="overflow-x:auto;" class="col-lg-offset-1 col-lg-9 panel panel-success">
    <div class="panel-heading">
      <h2 class="panel-title">Liste des matériels</h2>
    </div>
    <div class="panel-body">
    <p>Vous pouvez ici voir les détails des matériels et les clients associés</p>
  </div>
  <table class="table table-striped table-condensed">
<thead>
  <tr>
    <th>Clients</th>
    <th>departement</th>
    <th>logisticsChildAccountNumber</th>
    <th>CDV</th>
    <th>IA</th>
    <th>STC</th>
    <th>account</th>
    <th>installedProductID</th>
    <th>dateInstalled</th>
    <th>InstallationCity</th>
    <th>connexion</th>
    <th>environnement</th>
    <th>logiciel</th>
  </tr>
</thead>
  <tbody>

@foreach ($materiels as $materiel)
  <tr>
      <td><a href="/show/materiel/{{ $materiel->id }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
      <td>{{ $materiel->departement }}</td>
      <td>{{ $materiel->logisticsChildAccountNumber }}</td>
      <td>{{ $materiel->CDV }}</td>
      <td>{{ $materiel->IA }}</td>
      <td>{{ $materiel->STC }}</td>
      <td>{{ $materiel->account }}</td>
      <td>{{ $materiel->installedProductID }}</td>
      <td>{{ $materiel->dateInstalled }}</td>
      <td>{{ $materiel->InstallationCity }}</td>
      <td>{{ $materiel->connexion }}</td>
      <td>{{ $materiel->environnement }}</td>
      <td>{{ $materiel->logiciel }}</td>
  </tr>
@endforeach
</tbody>
</table>
 </div>

</section>
</div>
  @endsection
