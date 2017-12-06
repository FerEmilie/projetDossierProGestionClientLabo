@extends('layouts.app')

@section('content')
  <div class="row">
      <h2><span class="label label-default">Excel</span></h2>
    <section class="col-lg-7">
      <fieldset>
         <legend>Export Clients</legend>
          <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
          <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
          <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
        </fieldset>
      </section>
      <section style="margin-top:50px;" class="col-lg-7">
        <form action="{{ URL::to('importExcel') }}" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend>Import Nouveau Client</legend>
             {{ csrf_field() }}
           <label for="import_file">Téléchargement de fichier : </label>
          <input id="import_file" type="file" name="import_file" /></br>
          <button class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>Import Fichier</button>
        </fieldset>
        </form>
      </section>
    </div>
@endsection
