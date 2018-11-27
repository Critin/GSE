<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studies;
use App\Grades;
use App\Students;

class StudiesController extends Controller
{
    public function index()
    {
        //
        $studies = Studies::orderBy('id_grade','DESC')->paginate(8);
        return view('studies.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $studies = Studies::orderBy('id_grade','DESC')->paginate(10);
        return view('studies.create', compact('studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['id_student'=>'required', 'id_grade'=>'required']);

        Studies::create($request->all());
        return redirect()->route('studies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Studies $studies)
        { 
            $study = $studies->grades()->with(['owner'])->paginate(10);
            //dd($posts);
            return view('studies.index', compact('studies'));
        }
}
