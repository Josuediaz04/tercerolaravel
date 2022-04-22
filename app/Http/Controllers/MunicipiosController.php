<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use App\Models\Municipios;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipio = Municipios::all();
        $departamento = Departamentos::all();
        return view('municipios.index', compact('municipio', 'departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipios::all();
        $departamentos = Departamentos::all();
        return view('municipios.create', compact('municipios', 'departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            
            'nombre' => 'required|max:255',
            'codigo' => 'required|max:3',
            'borrado' => 'required|max:5',
            'id_departamento'=>'required'
        
        ]);
        $show = Municipios::create($validate);
        return redirect('/municipios')->with('success','municipios');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipios = municipios::findOrfail($id);
        return view('municipios.edit',compact('municipios'));
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
        $validate = $request->validate([
            'nombre' => 'required|max:225',
            'codigo' => 'required|max:5',
            'borrado'=> 'required|mas:|1',
            'id_departamento'=> 'required'
        ]);
        municipios::whereId($id)->update($validate);
        return redirect('/municipios')->with('success', 'Datos actualizados');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio = municipios::findOrfail($id);
        $municipio->delete();
        return redirect('/municipios')->with('success', 'Datos borrados con exito');
    }
}
