<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cliente.index',[
            'clientes'=>Cliente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new cliente();
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->direccion = $request->get('direccion');
        $cliente->fecha_nacimiento = $request->get('fecha_nacimiento');
        $cliente->telefono = $request->get('telefono');
        $cliente->email = $request->get('email');
        $cliente->categoria = $request->get('categoria');
        $cliente->save();

        return redirect('cliente');
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
        $cliente = Cliente::find($id);
        return view('Cliente.edit',[
            'cliente'=> $cliente
        ]);
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
        $cliente = Cliente::find($id);

        if(is_null($cliente)) {
            dd('ERROR');
        }
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->direccion = $request->get('direccion');
        $cliente->fecha_nacimiento = $request->get('fecha_nacimiento');
        $cliente->telefono = $request->get('telefono');
        $cliente->email = $request->get('email');
        $cliente->categoria = $request->get('categoria');
        $cliente->save();

        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('cliente');
    }

    public function confirm($id)
    {
        $cliente = Cliente::find($id);
        return view('Cliente.delete',[
            'cliente'=> $cliente
        ]);
    }

}
