<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class ControladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Categoria::all();
        return view('categorias', compact(['cats']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novacategoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $cat = new Categoria();
       $cat->nome = $request->input('nomeCategoria');
       $cat->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
