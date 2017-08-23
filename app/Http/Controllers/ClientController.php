<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Client;
use App\Materiel;

class ClientController extends Controller
{
      public function index()
    {
        return view('clients.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
 }

    public function liste()
  {
      $clients = Client::all();
      $materiels = Materiel::all();
      return view('clients.liste', ['clients' => $clients, 'materiels' => $materiels]);
  }

    public function show($id)
    {
      $client = Client::find($id);
      return view('clients.show', ['client' => $client]);
    }

    public function create()
    {
      return view('clients.create');
    }

    public function save(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|max:45',
          'responsable' => 'required|max:45',
          'adress' => 'required|max:255',
          'phone' => 'required|max:10',
          'nbTest' => 'required|max:11',
      ]);
      $client = new Client();
      $client->name = $request->input('name');
      $client->responsable = $request->input('responsable');
      $client->adress = $request->input('adress');
      $client->phone = $request->input('phone');
      $client->nbTest = $request->input('nbTest');
      $client->save();

      return redirect('/');
  }

  public function edit($id)
    {
      $client = Client::find($id);
      return view('clients.edit', ['client' => $client]);
    }

  public function update(Request $request, $id)
    {
    $client = Client::find($id);

    $client->name = $request->input('name');
    $client->responsable = $request->input('responsable');
    $client->adress = $request->input('adress');
    $client->phone = $request->input('phone');
    $client->nbTest = $request->input('nbTest');
    $client->save();

    return redirect('/');
    }

    public function delete($id)
      {
        $client = Client::find($id);
        $client->materiels()->detach();
        $client->delete();
        return redirect('/');
      }

      public function ajoutmateriel()
      {
        $clients = Client::all();
        $materiels = Materiel::all();
        return view('clients.materielClient', ['clients' => $clients, 'materiels' => $materiels]);
      }

      public function savemateriel(Request $request)
        {
        $client = new Client;
        $client->id = $request->input('id');
        $materiel = new Materiel;
        $materiel->id = $request->input('checkbox');
        $client->materiels()->attach($materiel);

        return redirect('/');
        }

}
