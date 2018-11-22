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

        return view('petitions', compact('petitions'));
    }

    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $petitions = Petitions::all(); 

        $pdf = PDF::loadView('pdf.petitions', compact('petitions'));

        return $pdf->download('listado.pdf');
    }
}
