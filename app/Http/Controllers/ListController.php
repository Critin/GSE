<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petitions;
use App\Companies;
use App\Grades;

class ListController extends Controller
{
    public function index()
    {
        $listados = Petitions::all();
        return view('listados.index', compact('petitions','listados'));
    }

    public function show($id)
    {
        //
        $listados = Petitions::find($id);
        return view('petitions.show', compact('petitions','listados'));
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