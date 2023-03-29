@extends('plantilla')
@section('titulo')
MDS - Inicio
@endsection
@section('textoNavbar')
Inicio
@endsection
@section('cuerpo')
<div class="container mt-4 va-m">
    <a class="btn-opcion" href="{{route('hojadecargo.index')}}">Hoja de Cargo</a>
    <a class="btn-opcion" href="{{route('insumos.index')}}">Insumos</a>

</div>
@endsection