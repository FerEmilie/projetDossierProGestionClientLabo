@extends('layouts.app')

@section('content')
<div class="row">
  <section class="col-lg-12">
    <h2><span class="label label-default">Modifier ce client</span></h2>

 <form id="form" class="col-lg-8" action="/update/{{ $client->id }}" method="post">
   <fieldset>
       <legend>Modifier</legend>
         {{ csrf_field() }}

         <label for="name">Nom du laboratoire: </label>
         <input autofocus="autofocus" class="form-control" type="text" name="name" id="name" value="{{ $client->name }}" /></br></br>

         <label for="responsable">Nom du responsable: </label>
         <input class="form-control" type="text" name="responsable" id="responsable" value="{{ $client->responsable }}"/></br></br>

         <label for="adress">Adresse du laboratoire: </label>
         <input class="form-control" type="text" name="adress" id="adress" value="{{ $client->adress }}" /></br></br>

         <label for="phone">Numéro de téléphone: </label>
         <input class="form-control" type="tel" name="phone" id="phone" value="{{ $client->phone }}" /></br></br>

         <label for="y">Nombre de tests: </label>
         <input class="form-control" type="number" name="y" id="y" value="{{ $client->y }}"/></br></br>

       <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
   </fieldset>
 </form>
</section>
</div>

@endsection
