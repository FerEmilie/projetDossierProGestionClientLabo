<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Client;
use App\Materiel;
use App\User;
use Excel;
use DB;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function exportExcel(){
    $clients = Client::select('name', 'responsable', 'adress', 'phone', 'y')->get();
    $clientsArray = [];
    $clientsArray[] = ['name', 'responsable', 'adress', 'phone', 'nbTest'];
    foreach ($clients as $client) {
         $clientsArray[] = $client->toArray();
     }

     Excel::create('clients', function($excel) use ($clientsArray) {
         $excel->setTitle('Clients');
         $excel->setDescription('clients file');

         $excel->sheet('sheet1', function($sheet) use ($clientsArray) {
             $sheet->fromArray($clientsArray, null, 'A1', false, false);
         });

     })->export('xls');
  }

  public function importExport(){
		return view('clients.importExport');
	}

	public function downloadExcel($type){
		$data = Client::get()->toArray();
		return Excel::create('clients', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data){
				$sheet->fromArray($data);
        });
		})->download($type);
	}

	public function importExcel(){
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
				$insert[] = ['name' => $value->name, 'responsable' => $value->responsable, 'adress' => $value->adress, 'phone' => $value->phone, 'y' => $value-> y];
			}

				if(!empty($insert)){
					DB::table('clients')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
}
