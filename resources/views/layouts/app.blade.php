<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>client bio</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
          <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <p class="navbar-brand">GESTIONNAIRE</p>
                  </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                        @else
                         <ul class="nav navbar-nav">
                          <li class="active"> <a href="/">Accueil</a> </li>
                          <li> <a href="/liste">Liste des clients</a> </li>
                          <li> <a href="/create">Nouveau client</a> </li>
                          <li> <a href="/materiel">Add matériel/client</a> </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </ul>
                            <form class="navbar-form navbar-right inline-form">
                              <div class="form-group">
                                <input type="search" class="input-sm form-control" placeholder="Recherche">
                                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                              </div>
                            </form>
                        @endif

                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js" type="text/javascript"></script>
</body>
</html>
