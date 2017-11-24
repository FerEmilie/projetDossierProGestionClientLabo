@extends('layouts.app')

@section('content')
<div class="row">
  <div class="jumbotron col-lg-12">
  <h1>Gestionnaire client</h1>
</div>
  </div>
<div class="row">
  <div class="col-lg-2 jumbotron">
    <form id="form" class="" action="/search" method="post">
      <fieldset>
          <legend>Recherche clients</legend>
            {{ csrf_field() }}
              <div class="form-group">
            <label for="id">Par laboratoire: </label>
            <input autofocus="autofocus" class="form-control" type="text" name="name" id="name" />
          </div>
          <div class="form-group">
          <label for="nbTest">Par Nombre de tests: </label>
          <input class="form-control" type="number" name="nbTest" id="nbTest" />
          </div>
          <button name="commit" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button></br></br>
      </fieldset>
    </form>
  </div>
<section>
<div style="overflow-x:auto;" class="col-lg-offset-1 col-lg-9 panel panel-success">
    <div class="panel-heading">
      <h2 class="panel-title">Liste des clients</h2>
    </div>
    <div class="panel-body">
    <p>Vous pouvez ici modifier supprimer et voir les détails des matériels clients</p>
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
        <th>Matériels</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
      <tbody>

      @foreach($clients as $client)
      <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $client->name }}</td>
          <td>{{ $client->responsable }}</td>
          <td>{{ $client->adress }}</td>
          <td>{{ $client->phone }}</td>
          <td>{{ $client->nbTest }}</td>
          <td><a href="/show/{{ $client->id }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
          <td><a href="/edit/{{ $client->id }}"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
          <td><a href="/delete/{{ $client->id }}" class="alert-link"><i id="alert" class="fa fa-trash-o" aria-hidden="true"></i></a></td>
      </tr>
      @endforeach
    </tbody>
 </table>
 <div class="print">
<input class="btn btn-info" type="button" value="Export Excel" onclick="javascript:location.href='/export'">
 </div>

 </div>

  <aside class="media col-lg-offset-2 col-lg-8">
    <div class="media-left">
      <iframe width="420" height="320" src="https://www.google.com/maps/d/embed?mid=1yu50Bm_GHp0D7a5RGdbd6klck1c" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Carte distribution des clients IHD</h4>
      <h5>Legende</h5>
    </div>
  </aside>
</section>
</div>
  @endsection
