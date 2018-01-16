@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-lg-offset-2 col-lg-8 jumbotron">
      <h1>Affichage matériels</h1>
    </div>
    <div style="overflow-x:auto;" class="col-lg-offset-1 col-lg-10 panel panel-success">

        <div class="panel-heading">
          <h2  class="panel-title">Liste du matériels</h2>
        </div>
        <div class="panel-body">
          <h3>Client {{ $client->name }}</h3>
          <p>Ici les détails des matériels client</p>
      </div>
          <table class="table table-striped table-condensed">
        <thead>
          <tr>
            <th>#</th>
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

       @foreach ($client->materiels as $materiel)
          <tr>
              <td>{{$i++}}</td>
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
</div>

@endsection
