<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grades;
use App\Students;
use App\Studies;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades = Grades::orderBy('id','DESC')->paginate(6);
        return view('Grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $grades = Grades::orderBy('id','DESC')->paginate(10);
        return view('Grades.create', compact('grades'));
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
        $this->validate($request,['name'=>'required', 'level'=>'required']);

        Grades::create($request->all());
        return redirect()->route('grades.index')->with('success','¡Grado registrado correctamente!');
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
        $grades = Grades::find($id);
        $studies = $grade -> study() -> with(['grades']);
        return view('grades.show', compact('grades', 'studies'));
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
        $grades = Grades::find($id);
        return view('grades.edit', compact('grades'));
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
        $this->validate($request,['name'=>'required', 'level'=>'required']);

        Grades::find($id)->update($request->all());
        return redirect()->route('grades.index')->with('success', '¡Grado actualizado correctamente!');
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
        Grades::find($id)->delete();
        return redirect()->route('grades.index')->with('success','¡Grado eliminado completamente!');
    }
}
