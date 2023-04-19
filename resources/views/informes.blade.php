@extends('plantilla')
@section('titulo')
MDS - Informes
@endsection
@section('cuerpo')
<div class="container mt-4 va-m">
    <h4 class="text-center">
        Listar solicitudes de:
    </h4>
   <!-- <a class="btn-opcion" href="{{route('hojadecargo.index')}}">Hojas de Cargo</a> !-->
    <a class="btn-opcion" href="{{route('insumosInformes.index')}}">Insumos</a>
</div>
@endsection