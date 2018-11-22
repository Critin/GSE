<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studies;
use App\Grades;

class StudiesController extends Controller
{
    public function index()
    {
        //
        $studies = Grades::orderBy('id','DESC')->paginate(6);
        //dd($students);
        //return view('Students.index', compact('students'));
    }

    public function show($id)
    {
        //
        $studies = Studies::find($id);
        //return view('studies.show', compact('students'));
    }
}
