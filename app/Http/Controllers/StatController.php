<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Client;
use App\Materiel;
use App\User;
use Excel;

class StatController extends Controller
{
  public function index()
{
  $clients = Client::select('name','y')->get();
   $clients = json_encode($clients, JSON_NUMERIC_CHECK);
  return view('stats.index', ['clients' => $clients]);
}

public function __construct()
{
    $this->middleware('auth');
}

}
