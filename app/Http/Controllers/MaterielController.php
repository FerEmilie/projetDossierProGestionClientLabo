<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Client;
use App\Materiel;

class MaterielController extends Controller
{

      public function __construct()
      {
          $this->middleware('auth');
   }

      public function liste()
    {
        $clients = Client::all();
        $materiels = Materiel::all();
        return view('materiels.liste', ['clients' => $clients, 'materiels' => $materiels]);
    }

      public function show($id)
      {
        $materiel = Materiel::find($id);
        return view('materiels.show', ['materiel' => $materiel]);
      }

      public function search(Request $request)
        {

          $input = $request->all();
          $shift = array_shift($input);
          $filtre = array_filter($input);

          $materiels = Materiel::where($filtre)->get();

          return view('materiels.liste', ['materiels' => $materiels]);

        }
}
