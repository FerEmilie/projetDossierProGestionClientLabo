@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-lg-offset-2 col-lg-8 jumbotron">
  <h1>Accueil</h1>
  <p>{{ date('D j \of M Y - \w\e\e\k \n\° W') }}</p>
</div>

<div class="col-lg-offset-1 col-lg-8">
  <h2>A la une</h2>
</div>
</div>

<div class="row">
<div id="carousel-example-generic" class="col-lg-offset-3 col-lg-5 carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/img/index.jpg" alt="labo">
      <div class="carousel-caption" style="background-color: rgba(184, 184, 184, 0.5);">
          <h3>Nouvelle recherche</h3>
          <a href="#">Read More...</a>
      </div>
    </div>
    <div class="item">
      <img src="/img/bio.jpg" alt="bio">
      <div class="carousel-caption" style="background-color: rgba(184, 184, 184, 0.5);">
        <h3>Nouveauté en labo</h3>
      </div>
    </div>
    <div class="item">
      <img src="/img/ih.jpg" alt="ih">
      <div class="carousel-caption" style="background-color: rgba(184, 184, 184, 0.5);">
        <h3>Nouveauté en labo</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

@endsection
