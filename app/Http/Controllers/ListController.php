<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petitions;

class ListController extends Controller
{
    public function index()
    {
        $petitions = Petitions::all();

        return view('listados.index', compact('petitions'));
    }

    public function listadoFecha()
	{
		$petitions = Petitions::all()->groupBy('updateAt')->get();
		return View::make('listado.index', compact('listado'));
    }
    
    public function listadoCiclo()
	{
		$petitions = Petitions::all()->groupBy('id_grade')->get();
		return View::make('listado.index', compact('listado'));
    }
    
    public function listadoTipo()
	{
		$petitions = Petitions::all()->groupBy('type')->get();
		return View::make('listado.index', compact('listado'));
	}
}