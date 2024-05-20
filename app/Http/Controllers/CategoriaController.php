<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria:: all();
        return view('categoriaIndex', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoriaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Categoria::create($request->all());
        Categoria::create([
            'nombre' => $request->input('nombre'),
            'precio' => $request->integer('precio'),
            'tipo' => $request->input('tipo'),
            'nomComerciante' => $request->input('nomComerciante')
        ]);
        return redirect('/categoria');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('/categoriaShow',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoriaEdit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $id = Categoria::where('id', $id)->update($request->except('_token', '_method', 'action'));
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = Categoria::findOrFail($id);
        $id->delete();
        Session()->flash('success','Se ha eliminado con exito');
        return redirect('/categoria');
    }
}
