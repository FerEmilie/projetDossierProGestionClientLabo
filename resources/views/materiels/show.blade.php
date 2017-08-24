@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-lg-offset-2 col-lg-8 jumbotron">
      <h1>Affichage clients</h1>
    </div>
    <div style="overflow-x:auto;" class="col-lg-offset-1 col-lg-10 panel panel-success">

        <div class="panel-heading">
          <h2  class="panel-title">Liste des clients</h2>
        </div>
        <div class="panel-body">
          <h3>Materiel {{ $materiel->logiciel }}</h3>
          <p>Ici les détails des matériels client</p>
      </div>
          <table class="table table-striped table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Responsable</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Nb de Test</th>
          </tr>
        </thead>
          <tbody>

       @foreach ($materiel->clients as $client)
          <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->responsable }}</td>
            <td>{{ $client->adress }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->nbTest }}</td>
          </tr>
        @endforeach
    </tbody>
 </table>
</div>
</div>

  @endsection
