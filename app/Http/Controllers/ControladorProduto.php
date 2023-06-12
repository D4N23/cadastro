<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prod = Produto::all();
        return view('/produtos', compact(['prod']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prod = new Produto();
        $prod->nome = $request->input('nomeProduto');
        $prod->save();
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            return view('editarproduto', compact('prod'));
        }
        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            return view('editarproduto', compact('prod'));
        }
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            return view('editarproduto', compact('prod'));
        }
        return redirect('/produtos');
    }
}
