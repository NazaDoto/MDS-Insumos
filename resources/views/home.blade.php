@extends('plantilla')
@section('titulo')
MDS - Solicitudes
@endsection
@section('textoNavbar')
Solicitudes
@endsection
@section('cuerpo')
<div class="container mt-4 va-m">
    <h4 class="text-center">
        Nueva solicitud:
        </h4>
    <a class="btn-opcion" href="{{route('hojadecargo.index')}}">Hoja de Cargo</a>
    <a class="btn-opcion" href="{{route('insumos.index')}}">Insumo</a>
</div>
@endsection