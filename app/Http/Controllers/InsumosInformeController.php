<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insumo;
use Illuminate\Support\Facades\URL;
use PDF;

class InsumosInformeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->bool == null){
            $insumos = Insumo::orderBy('id', 'DESC')->get();            
            return view('/insumos/informes', compact('insumos')); ;
            
        } else{

            if($request->bool == 0){
                $insumos = Insumo::where('direccion', 'LIKE', '%' . $request->buscar . '%')
                ->orWhere('area', 'LIKE', '%' . $request->buscar . '%')
                ->orWhere('insumo', 'LIKE', '%' . $request->buscar . '%')
                ->orWhere('solicitante', 'LIKE', '%' . $request->buscar . '%')
                ->orderBy('id', 'DESC')
                ->get();
                return response()->json($insumos);
            } else {
                $insumos = Insumo::all();            

                return response()->json($insumos);
            }
        }
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
    public function createPDF($id) {
        $insumo = Insumo::find($id);
        $data = [
            'id'=>$insumo->id,
            'direccion'=>$insumo->direccion,
            'area'=>$insumo->area,
            'insumo'=>$insumo->insumo,
            'toner'=>$insumo->toner,
            'solicitante'=>$insumo->solicitante,
            'firma'=>$insumo->firma,
            'fecha'=>$insumo->created_at,
            
        ];
        $pdf = PDF::loadView('pdfview', $data);
        // download PDF file with download method
        return $pdf->download('Insumo_'. strval($insumo->id) .'.pdf');
      }
    public function store(Request $request)
    {
        //
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
