@extends('layouts.app')

@section('content')
<div class="row">
  <section class="col-lg-8">
    <h2><span class="label label-default">Associer un matériel à un client</span></h2>

 <form id="form" class="col-lg-8" action="/savemateriel" method="post">
   <fieldset>
       <legend>Selectionner un client et un matériel</legend>
         {{ csrf_field() }}

         <label for="id">Nom du laboratoire: </label>
         <select class="form-control" name="id" id="id"></br>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
         </select>

         <div class="checkbox">
           <p>Choix du matériel : </p>
           @foreach ($materiels as $materiel)
           <label for="checkbox">
           <input type="checkbox" name="checkbox" value="{{ $materiel->id }}" />{{ $materiel->IA }}
            </label>
           @endforeach
          </div>

       <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
   </fieldset>
 </form>
</section>
</div>

@endsection
