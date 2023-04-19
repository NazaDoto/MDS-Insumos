<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Models\Insumo;
use App\Models\Stock;

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
        $stock = Stock::find(1);
        switch ($request->insumo){
            case 'Teclado':
                if ($stock->teclados > 0){
                    $stock->teclados -= 1;
                    $stock->save();
                    $insumo = new Insumo($request->all());
                    $insumo->save();
                    return redirect()->route('insumos.index');
                } else{
                    return redirect()->route('insumos.index')->with('error','No hay disponibilidad del insumo.');
                }
                break;
                case 'Mouse':
                    if ($stock->mouse > 0){
                        $stock->mouse -= 1;
                        $stock->save();
                        $insumo = new Insumo($request->all());
                        $insumo->save();
                        return redirect()->route('insumos.index');
                    } else{
                        return redirect()->route('insumos.index')->with('error','No hay disponibilidad del insumo.');
                    }
                    break;
                    case 'Tóner':

                        if ($stock->{$request->toner} > 0){
                            $stock->{$request->toner} -= 1;
                            $stock->save();
                            $insumo = new Insumo($request->all());
                            $insumo->save();
                            return redirect()->route('insumos.index');
                        } else{
                            return redirect()->route('insumos.index')->with('error','No hay disponibilidad del insumo.');
                        }
                        break;
        }
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
