<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
 
class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumo = Stock::find(1);            
            return view('ingresos', compact('insumo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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
    public function update(Request $request)
    {
        $id = 1;
        $insumo = Stock::find($id);
        switch ($request->insumo){
            case 'Teclado':
                $insumo->teclados += $request->cantidad;
                break;
                case 'Mouse':
                    $insumo->mouse += $request->cantidad;
                    break;
                    case 'Tóner':
                        $toner = $request->toner;
                        $insumo->$toner += $request->cantidad;
                        break;
        }
        $insumo->save();
        return redirect()->route('ingresos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
