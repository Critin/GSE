<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petitions;
use Barryvdh\DomPDF\Facade as PDF;

class PetitionsController extends Controller
{
    public function index()
    {
        $petitions = Petitions::all();

        return view('pdf', compact('listados'));
    }

    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $petitions = Petitions::all(); 

        $pdf = PDF::loadView('pdf.listados', compact('listados'));

        return $pdf->download('listado.pdf');
    }
}
