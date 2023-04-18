@extends('plantilla')
@section('titulo')
MDS - Ingresos
@endsection
@section('textoNavbar')
Ingresos
@endsection
@section('cuerpo')
<div class="container mt-4 va-m">
    <form class="text-center"action="{{ route('ingresos.edit')}}" method="post">
        @csrf
    <select class="opciones text-center" name="insumo" id="insumo" required>
        <option value="Seleccionar insumo" disabled selected>Seleccionar insumo</option>
        <option value="Tóner">Tóner</option>
        <option value="Mouse">Mouse</option>
        <option value="Teclado">Teclado</option>
    </select>
    <label class="texto-opciones" for="toner" id="labelToner" hidden>Modelo de tóner</label>
    <select class="opciones text-center" name="toner" id="toner" hidden>
        <option value="Seleccionar tóner" disabled selected>Seleccionar tóner</option>
        <option value="17A">17A</option>
    </select>
    <label class="texto-opciones" for="cantidad">Cantidad:</label>
    <input class="opciones input-texto text-center" type="number" name="cantidad" id="cantidad" placeholder="Cantidad">
    </form>
</div>
@endsection