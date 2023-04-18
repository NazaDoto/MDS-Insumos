<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insumo;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$insumos = Insumo::all();
        return view('insumos');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $insumo = new Insumo($request->all());
        $insumo->save();
        return redirect()->route('insumos.index');
    }

    public function edit($id)
    {
        $insumo = Insumo::findOrFail($id);
        return view('insumos.edit', compact('insumo'));
    }

    public function update(Request $request, $id)
    {
        $insumo = Insumo::findOrFail($id);
        $insumo->fill($request->all());
        $insumo->save();
        return redirect()->route('insumos.index');
    }

    public function destroy($id)
    {
        $insumo = Insumo::findOrFail($id);
        $insumo->delete();
        return redirect()->route('insumos.index');
    }
}
