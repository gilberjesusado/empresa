<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Http\Requests\EmpleadoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Empleado::all();
        return view('empleados.lista', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoRequest $request)
    {
        /*$request->validate([
            'nombres' => 'required|max:10',
            'apellidos' => 'required',
            'cedula' => 'required|unique:empleados|integer',
            'celular' => 'required|integer|min:10|max:10',
            'correo' => 'email',
            'cargo' => 'required'
        ]); */

        $request->request->add(['user_id' => Auth::id()]);
        Empleado::create($request->all());
        return redirect('empleados')->with('estado', 'Empleado guardado de forma correcta!');
        // Pasamos la pariable 'estado' a la vista con el valor 'Empleado guiardado de forma correcta!'
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
        //
        $datos = Empleado::find($id);
        return view('empleados.editar', compact('datos'));return redirect('empleados');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoRequest $request, $id)
    {
        /*$request->validate([
            'nombres' => 'required|max:10',
            'apellidos' => 'required',
            'cedula' => 'required|unique:empleados|integer',
            'celular' => 'required|integer|min:10|max:10',
            'correo' => 'email',
            'cargo' => 'required'
        ]); */

        Empleado::find($id)->update($request->all());
        return redirect('empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::find($id)->delete();
        return redirect('empleados');
    }
}
