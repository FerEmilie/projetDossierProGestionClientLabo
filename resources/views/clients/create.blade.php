@extends('layouts.app')

@section('content')
<div class="row">
  <section class="col-lg-12">
    <h2><span class="label label-default">Ajouter un nouveau client</span></h2>

 <form id="form" class="col-lg-8" action="/save" method="post">
   <fieldset>
       <legend>Création</legend>
         {{ csrf_field() }}

         <label for="name">Nom du laboratoire: </label>
         <input autofocus="autofocus" required="required" class="form-control" type="text" name="name" id="name" /></br></br>

         <label for="responsable">Nom du responsable: </label>
         <input autofocus="autofocus" class="form-control" type="text" name="responsable" id="responsable" /></br></br>

         <label for="adress">Adresse du laboratoire: </label>
         <input autofocus="autofocus" class="form-control" type="text" name="adress" id="adress" /></br></br>

         <label for="phone">Numéro de téléphone: </label>
         <input autofocus="autofocus" class="form-control" type="tel" name="phone" id="phone" /></br></br>

         <label for="nbTest">Nombre de tests: </label>
         <input autofocus="autofocus" class="form-control" type="number" name="nbTest" id="nbTest" /></br></br>

       <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
   </fieldset>
 </form>
</section>
</div>

@endsection
