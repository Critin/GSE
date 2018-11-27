<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petitions;
use App\Companies;
use App\Grades;
use App\Students;

class PetitionsController extends Controller
{
    public function index()
    {
        $petitions = Petitions::orderBy('id','DESC')->paginate(6);
        return view('petitions.index', compact('petitions'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $petitions = Petitions::orderBy('id','DESC')->paginate(10);
        return view('petitions.create', compact('petitions'));
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
        $this->validate($request,['id_company'=>'required', 'id_grade'=>'required', 'type'=>'required', 'n_students'=>'required']);

        Petitions::create($request->all());
        return redirect()->route('petitions.index')->with('success','Petición registrada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $petitions = Petitions::find($id);
        $petitions = $petition -> owner() -> paginate(10);

        return view('petitions.show', compact('petitions','listados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $petitions = Petitions::find($id);
        
        return view('petitions.edit', compact('petitions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,['id_company'=>'required', 'id_grade'=>'required', 'type'=>'required', 'n_students'=>'required']);

        Petitions::find($id)->update($request->all());
        return redirect()->route('petitions.index')->with('success', '¡Petición actualizada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Petitions::find($id)->delete();
        return redirect()->route('petitions.index')->with('success', '¡Petición eliminada correctamente!');
    }
}
