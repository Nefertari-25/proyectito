<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CafeteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cafes = Cafeteria:: all();
        return view('cafeIndex', compact('cafes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('productoCreate', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //PRIMERA MANERA
        // Cafeteria::create([
        //     'nombre' => $request->input('nombre'),
        //     'precio' => $request->input('precio'),
        //     'descripcion' => $request->input('descripcion'),
        // ]);

         // Crear el cafe
         $cafeteria = new Cafeteria();
         $cafeteria->Nombre = $request->Nombre;
         $cafeteria->Precio = $request->Precio;
         $cafeteria->Descripcion = $request->Descripcion;
         $cafeteria->save();
 
         // Asociar las categorías seleccionadas al producto
         $cafeteria->categoria()->attach($request->categoria);
 
         Session()->flash('success', 'Se ha guardado con éxito');

        //SEGUNDA MANERA
        // $datosProducto = $request->only(['nombre','precio','descripcion']);

        //TERCERA MANERA
        // Cafeteria::create($request->all());
        return redirect ('/cafeteria');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($cafeteria);
        $cafeteria = Cafeteria::findOrFail($id);
        return view('/cafeShow',compact('cafeteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Cafeteria::findOrFail($id);
        return view('cafeEdit', compact('categoria','cafeteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $cafeteria = Cafeteria::findOrFail($id);
        // return view('cafeEdit', compact('cafeteria'));
        //$id = Cafeteria::where('id', $id)->update($request->except('_token', '_method', 'action'));
        // Cafeteria::where('id', $cafeteria->id)->update($request->except('_token', '_method', 'action'));
        $id = Cafeteria::where('id', $id)->update($request->except('_token', '_method', 'action'));
        Session()->flash('success', 'Se ha modificado con éxito');
        return redirect('/cafeteria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = Cafeteria::findOrFail($id);
        $id->delete();
        Session()->flash('success','Se ha eliminado con exito');
        return redirect('/cafeteria');
    }
}
